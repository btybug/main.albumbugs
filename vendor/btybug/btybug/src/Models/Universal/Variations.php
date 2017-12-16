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

class Variations implements \ArrayAccess, \Countable, \IteratorAggregate, Htmlable,Renderable
{
    protected $path;
    protected $view;
    protected $attributes;

    public function __construct($obj)
    {
        $this->path = base_path($obj->getPath() . DS . 'variations');
        $this->view=$obj->getView();

    }

    private function render()
    {
        return 'hello';
    }

    public function all()
    {

    }

    /**
     * @param mixed $key
     * @return bool
     */
    public function offsetExists($key)
    {
        return $this->items->has($key);
    }

    /**
     * Get the item at the given offset.
     *
     * @param  mixed $key
     * @return mixed
     */
    public function offsetGet($key)
    {
        return $this->items->get($key);
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
        $this->items->put($key, $value);
    }

    /**
     * Unset the item at the given key.
     *
     * @param  mixed $key
     * @return void
     */
    public function offsetUnset($key)
    {
        $this->items->forget($key);
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

    public function __toString()
    {
        return $this->render();
    }

}