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
use Btybug\FrontSite\Repository\ClassifierRepository;

class ClassifierService extends GeneralService
{
    private $classifierRepository;
    private $classifierItemPageRepository;

    public function __construct(
        ClassifierRepository $classifierRepository,
        ClassifierItemPageRepository $classifierItemPageRepository
    )
    {
        $this->classifierRepository = $classifierRepository;
        $this->classifierItemPageRepository = $classifierItemPageRepository;

    }

    public function save (array $data)
    {
        $response = $this->classifierRepository->create($data + ['id' => uniqid()]);
        return ($response) ? $response->id : null;
    }

    public function getClassifierPageRelations(int $pageId)
    {
        return $this->classifierItemPageRepository
            ->model()
            ->where('front_page_id', $pageId)
            ->groupBy('classifier_id')
            ->get();
    }

    public function classifierItems()
    {
        return $this->classifierRepository
            ->model()
            ->classifierItem()
            ->pluck('title', 'id')
            ->toArray();
    }

}