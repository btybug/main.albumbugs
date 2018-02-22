<?php

namespace Btybug\btybug\Repositories;

use Btybug\btybug\Models\Hook;
use Btybug\btybug\Models\Painter\Painter;


/**
 * Class HookRepository
 * @package Btybug\btybug\Repositories
 */
class HookRepository extends GeneralRepository
{

    /**
     * @return Hook
     */
    public function model()
    {
        return new Hook();
    }

    public function addUnit($id,$variation)
    {
        $hook=$this->model()->find($id);
        $data=($hook->data)??[];
        $data[]=$variation;
        $hook->data=$data;
        $hook->save();
        return $this;
    }

    public function render($id)
    {
        $hook=$this->model()->find($id);
        if(!$hook) return false;
        $data=$hook->data;
        $html='';
        if(is_array($data)){
            foreach ($data as $unit){
               $variation= Painter::findVariation($unit);
               if($variation){
                   $html.=$variation->variations()->render();
               }else{
                   $html.='<p>Wrong Unit</p>';
               }

            }
            return $html;
        }
        return false;
    }
    public function update(int $id, array $data){
        $model = $this->model->find($id);
        if (empty($model)) {
            return null;
        }
        $arr = [];
        $model->name = $data["name"];
        $model->type = $data["type"];
        if(isset($data["menu_area"])){
            foreach ($data["menu_area"] as $unit){
                if($unit["variation"]){
                    $arr[] = $unit;
                }
            }
        }
        if(count($arr)){
            $model->data = $arr;
        }
        $model->save();
        return $model;
    }
    public function saveHook(array $data){
        $model = $this->model();
        $model->name = $data['name'];
        $model->type = $data['type'];
        $model->author_id = auth()->user()->id;
        $arr = [];
        if(isset($data["menu_area"])){
            foreach ($data["menu_area"] as $unit){
                if($unit["variation"]){
                    $arr[] = $unit;
                }
            }
        }
        if(count($arr)){
            $model->data = $arr;
        }
        $model->save();
        return $model;
    }
}