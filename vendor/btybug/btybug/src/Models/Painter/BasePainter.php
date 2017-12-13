<?php
/**
 * Created by PhpStorm.
 * User: menq
 * Date: 12.12.2017
 * Time: 15:35
 */

namespace Btybug\btybug\Models\Painter;


use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;
use Mockery\Exception;

abstract class BasePainter implements PainterInterface
{


    protected $config_path;
    protected $base_path;
    protected $attributes = [];
    protected $original = [];
    protected $storage = null;

    public $name_of_json = 'config.json';

    public function __construct()
    {
        $this->config_path = $this->getConfigPath();
        $this->base_path = $this->getStoragePath();
        $this->makeConfigJson();
    }

    abstract function getConfigPath();

    abstract function getStoragePath();

    public function toArray()
    {
        if (isset($this->attributes)) return $this->attributes;
        return false;
    }

    public function scopeAll()
    {
        $all = [];
        $path = $this->base_path;
        $units = \File::directories($path);

        if (count($units) > 0) {
            foreach ($units as $key => $unit) {
                $full_path = $unit . DS . $this->name_of_json;
                $obj = new Painter();
                $is_true = $obj->validateWithReturn($full_path);
                if ($is_true) {
                    $all[$key] = $obj->makeItem($full_path);
                }
            }
        } else {
            $this->throwError("There is no unit found");
        }
        return collect($all);
    }

    public function scopeCreateVariation(array $array)
    {

    }

    public function scopeMakeVariation(array $array)
    {
        $variations = $this->variations;
        $variations[uniqid() . '.' . $this->slug] = $array;
        $this->setAttributes('variations', $variations);

        return collect($this);
    }

    public function scopeFind(string $slug)
    {
        $path = $this->getItemConfigJsonPath($slug);
        return $this->makeItem($path);
    }

    protected function makeItem($path)
    {
        $this->validate($path);
        $config = json_decode(\File::get($path), true);
        $this->attributes = $config;
        $this->original = $config;
        return $this;
    }


    public function scopeGetAllByTagName(...$args)
    {
        $all_by_tag_name = [];
        if (count($args)) {
            $units = $this->scopeAll();
            foreach ($units as $key => $unit) {
                foreach ($args as $keyy => $tagname) {
                    if (isset($unit->attributes['tags']) && $unit->attributes['tags'][0] == $tagname) {
                        $all_by_tag_name[$key] = $unit;
                    }
                }
            }
        } else {
            $this->throwError("Empty arguments");
        }
        return collect($all_by_tag_name);
    }

    public function scopeSave(array $array)
    {
        $config = $this->config_path;
        \File::put($this->config_path, json_encode($array, true));
        return $this;
    }

    public function scopeSaveVariation()
    {
        dd($this);
    }

    public function scopeWhere(string $arg1, string $condition, string $arg3)
    {
        if (is_null($this->storage)) {
            $all = $this->scopeAll();
        } else {
            $all = $this->storage;
        }
        foreach ($all as $key => $unit) {
            $config = $unit->attributes;
            $is_condition_true = $this->defineCondition($condition, $config[$arg1], $arg3);

            if (isset($config[$arg1]) && $is_condition_true) {
                $result[] = $unit;
            }
        }
        $this->storage = collect($result);
        return $this;
    }

    public function scopeGet()
    {
        return $this->storage;
    }

    public function scopeRender($settings)
    {
        // TODO: Implement scopeRender() method.
    }

    public function scopeRenderSettings($settings)
    {
        // TODO: Implement scopeRenderSettings() method.
    }

    public function makeConfigJson()
    {
        if (!\File::exists($this->config_path)) {
            \File::put($this->config_path, '{}');
        }
    }

    private function getRegisters()
    {
        $get_content = @json_decode(\File::get($this->config_path), true);
        if ($get_content) {
            return $get_content;
        }
        return [];
    }

    private function scopeRegistration($unit_path)
    {
        $this->scopeFind('gv_content_unit_slider');
        $full_path = $this->makePath($unit_path);
        $this->validate($full_path);

        $get_content = json_decode(\File::get($full_path), true);
        $this->validateSlugWithPath($get_content);

        $slug = $get_content["slug"];
        $path = $get_content["path"];

        $push_into_config = $this->getRegisters();
        $push_into_config[$slug] = $path;

        return \File::put($this->config_path, json_encode($push_into_config));

    }

    public function __get($name)
    {
        $result = isset($this->toArray()[$name]) ? $this->toArray()[$name] : false;
        return $result;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $method = 'scope' . ucfirst($name);
        if (method_exists($this, $method)
            && is_callable(array($this, $method))
        ) {
            return call_user_func_array([$this, $method], $arguments);
        }
        throw new Exception("Method $name does not exist");
    }

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->toArray()[$name]);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        $method = 'scope' . ucfirst($name);
        $_this = new static;
        if (method_exists($_this, $method) && is_callable(array($_this, $method))) {
            return call_user_func_array([$_this, $method], $arguments);
        } else {
            throw new \Error("Method $name does not exist");
        }
    }


// make a path
    protected function makePath($path)
    {
        return $this->base_path . $path . DS . $this->name_of_json;
    }

    protected function getItemConfigJsonPath($slug)
    {

        $config = $this->getRegisters();
        if (!isset($config[$slug])) {
            $this->throwError("Not Registered Item $slug !!!", 404);
        }
        return base_path($config[$slug]) . DS . $this->name_of_json;
    }

// validate if file exist

    protected function validate($path)
    {
        if (!\File::exists($path)) {
            $this->throwError('File does not found', 404);
        }
        return true;
    }

    // validate if file exist and return true or false

    protected function validateWithReturn($path)
    {
        if (!\File::exists($path)) {
            return false;
        }
        return true;
    }

// if slug or path is invalid
    public function validateSlugWithPath($content)
    {
        if (!isset($content["slug"])) {
            $this->throwError('Slug does not found', 404);
        }
        if (!isset($content["path"])) {
            $this->throwError('Path does not found', 404);
        }
        return true;
    }

    // function for error
    public function throwError($msg, $code = 404)
    {
        throw new \Error($msg, $code);
    }

    // choose which condtion is was setted
    protected function defineCondition($condition, $arg1, $arg2)
    {
        $bool = false;
        switch ($condition) {
            case ">":
                $bool = $arg1 > $arg2;
                break;
            case "<":
                $bool = $arg1 < $arg2;
                break;
            case "=":
                $bool = $arg1 == $arg2;
                break;
            default:
                $this->throwError("Condition is not exist");
        }
        return $bool;
    }

    //
    protected function setAttributes($key, $value)
    {
        $attributes = $this->attributes;
        $attributes[$key] = $value;
        $this->attributes = $attributes;
        return $this;
    }
}