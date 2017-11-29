<?php
/**
 * Created by PhpStorm.
 * User: Arakelyan
 * Date: 31-Jul-17
 * Time: 18:11
 */

namespace Btybug\FrontSite\Services;

use Btybug\btybug\Services\GeneralService;
use Btybug\FrontSite\Repository\ClassifierItemPageRepository;
use Btybug\FrontSite\Repository\ClassifierItemRepository;
use Btybug\FrontSite\Repository\ClassifierRepository;

class ClassifierService extends GeneralService
{
    private $classifierRepository;
    private $classifierItemRepository;
    private $classifierItemPageRepository;

    public function __construct (
        ClassifierRepository $classifierRepository,
        ClassifierItemRepository $classifierItemRepository,
        ClassifierItemPageRepository $classifierItemPageRepository
    )
    {
        $this->classifierRepository = $classifierRepository;
        $this->classifierItemRepository = $classifierItemRepository;
        $this->classifierItemPageRepository = $classifierItemPageRepository;

    }

    public function save (array $data)
    {
        $response = $this->classifierRepository->create($data + ['id' => uniqid()]);

        return ($response) ? $response->id : null;
    }

    public function delete ($id)
    {
        $deleted = false;
        $response = $this->classifierRepository->findBy('id', $id);
        if ($response) $deleted = $response->delete();

        return $deleted;
    }

    public function getClassifierPageRelations (int $pageId)
    {
        return $this->classifierItemPageRepository
            ->model()
            ->where('front_page_id', $pageId)
            ->groupBy('classifier_id')
            ->get();
    }

    public function classifierItems ()
    {
        return $this->classifierRepository
            ->model()
            ->classifierItem()
            ->pluck('title', 'id')
            ->toArray();
    }

    public function generateItems ($id, $data)
    {
        $model = $this->classifierRepository->findBy('id', $id);
        if ($model && $data) {
            $this->cleanItems($model->id);
            $this->addItems(json_decode($data, true), 0, $model->id);
        }
    }

    private function cleanItems ($classifier_id)
    {
        $this->classifierItemRepository->deleteByCondition('classifier_id', $classifier_id);
    }

    private function addItems ($data, $parent, $classifier_id, $i = 0)
    {
        if (count($data)) {
            $item = $data[$i];
            $new = $this->classifierItemRepository->create([
                'id'            => uniqid(),
                'title'         => $item['title'],
                'icon'          => $item['icon'],
                'parent_id'     => $parent,
                'classifier_id' => $classifier_id,
                'informative'   => (isset($item['informative']) && $item['informative'] == "true") ? 1 : 0,
                'listing'       => (isset($item['listing']) && $item['listing'] == "true") ? 1 : 0,
                'tagged'        => (isset($item['tagged']) && $item['tagged'] == "true") ? 1 : 0,
            ]);

            if (isset($item['children']) && $new) {
                $this->addItems($item['children'], $new->id, $classifier_id, 0);
            }

            $i++;
            if (isset($data[$i])) {
                $this->addItems($data, $parent, $classifier_id, $i);
            }
        }
    }

    public function loadItems ($id, bool $json = false, array $columns = ['*'])
    {
        $data = $this->classifierItemRepository->model()->select($columns)->
        with('children')
            ->where('parent_id', 0)
            ->where('classifier_id', $id)
            ->get();

        return ($json) ? json_encode($data, true) : $data;
    }
}