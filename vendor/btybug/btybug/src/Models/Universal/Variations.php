<?php
/**
 * Created by PhpStorm.
 * User: sahak
 * Date: 16.12.2017
 * Time: 20:07
 */

namespace Btybug\btybug\Models\Universal;


use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use File;
use Illuminate\Support\Collection;

class Variations implements \ArrayAccess, \Countable, \IteratorAggregate, Htmlable
{
    protected $path;
    protected $view;
    protected $attributes;
    protected $model;
    protected $items;

    public function __construct($obj)
    {
        $this->view = $obj->getViewFile();
        $this->model = $obj;
        $this->path = $obj->getVariationsPath();

    }

    public function render()
    {
        $slug = $this->model->getSlug();
        $tpl = $this->view;
        $path = $this->model->getPath();
        \View::addLocation($this->model->getPath());
        \View::addNamespace($slug, $this->model->getPath());
        $variables = $this->attributes;
        return \View::make("$slug::$tpl")->with($variables)->with(['tplPath' => $path, '_this' => $this->model])->render();
    }

    public function all()
    {
        $vars = File::allFiles($this->path);
        $array = array();
        foreach ($vars as $var) {
            if (File::extension($var) == 'json') {
                $all = new $this($this->model);
                $all->id = File::name($var);
                $all->path = $this->path . '/' . File::name($var) . '.json';
                $all->file = $var;
                $data = json_decode(File::get($var), true);
                $all->attributes = $data instanceof Collection ? $data : Collection::make($data);
                $all->original = $all->attributes;
                $all->updated_at = File::lastModified($var);
                $array[$data['id']] = $all;
            }
        }
        $this->items = collect($array);
        return $this;
    }

    public function find($id)
    {
        $variations = $this->all();
        return $variations->items[$id];

    }

    public function deleteVariation($id){
        $var = $this->find($id);
        $this->unsetVar($var->path);

        return $this;
    }

    public function makeVariation(array $array)
    {
        $rand_id=uniqid();
        $id = $this->model->getSlug() . '.' . $rand_id;
        $path = $this->path . DS . $id . '.json';

        $this->path = $path;

        $variation_title = 'New variation_'.$rand_id;
        $settings = [];
        $arr = [];
        if(!isset($array['title'])){
            $array['title'] = $variation_title;
        }
        if(isset($array["settings"])){
            $settings = $array["settings"];
        }
        $arr['id'] = $id;
        $arr['title'] = $array['title'];
        $arr['settings'] = $settings;

        $this->attributes = collect($arr);

        return $this;
    }

    public function createVariation(array $array)
    {
     return $this->makeVariation($array)->save();
    }


    /**
     * @param mixed $key
     * @return bool
     */
    public function offsetExists($key)
    {
        return $this->attributes->has($key);
    }

    /**
     * Get the item at the given offset.
     *
     * @param  mixed $key
     * @return mixed
     */
    public function offsetGet($key)
    {
        return $this->attributes->get($key);
    }

    /**
     * Set the item at the given offset.
     *
     * @param  mixed $key
     * @param  mixed $value
     * @return void
     */
    public function offsetSet($key, $value)
    {
        $this->attributes->put($key, $value);
    }

    /**
     * Unset the item at the given key.
     *
     * @param  mixed $key
     * @return void
     */
    public function offsetUnset($key)
    {
        $this->attributes->forget($key);
    }

    /**
     * Get the number of items for the current page.
     *
     * @return int
     */
    public function count()
    {
        return $this->items->count();
    }

    /**
     * Get an iterator for the items.
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->items->all());
    }

    /**
     * Ged HTML for the current variation
     *
     * @return string|void
     */
    public function toHtml()
    {
        return $this->render();
    }



    /**
     * @param $name
     * @param $value
     * @return $this
     */

    public function __set($name, $value)
    {
        if (isset($this->attributes[$name])) {
            $this->attributes[$name] = $value;
            return $this;
        }
    }

    public function setSettinds($name, $value)
    {
        $attr = $this->attributes->toArray();
        $attr['settings'][$name] = $value;
        $this->attributes = collect($attr);
        return $this;
    }

    public function __get($name)
    {
        $result = isset($this->attributes[$name]) ? $this->attributes[$name] : false;
        return $result;
    }
    public function unsetVar($path){
        if (File::exists($path)){
            return File::delete($path);
        }
        $this->throwError('File Does not found');
    }

    public function throwError($msg, $code = 404)
    {
        throw new \Error($msg, $code);
    }

    public function save()
    {
        File::put($this->path, json_encode($this->attributes->toArray(), true));
        return $this;
    }
    public function getModel(){
        return $this->model;
    }

}