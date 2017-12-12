<?php
/**
 * Created by PhpStorm.
 * User: menq
 * Date: 12.12.2017
 * Time: 15:35
 */

namespace Btybug\btybug\Models\Painter;


use Illuminate\Contracts\Support\Arrayable;

abstract class BasePainter implements PainterInterface,Arrayable
{


    protected $config_path;
    protected $base_path;
    protected $attributes = [];

    public function __construct()
    {
        $this->config_path = $this->getConfigPath();
        $this->base_path = $this->getStoragePath();
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
        // TODO: Implement scopeAll() method.
    }
    public function scopeCreateVariation(array $array)
    {
        // TODO: Implement scopeCreateVariation() method.
    }
    public function scopeFind(string $slug)
    {
        // TODO: Implement scopeFind() method.
    }
    public function scopeGet()
    {
        // TODO: Implement scopeGet() method.
    }
    public function scopeGetAllByTagName(...$args)
    {
        // TODO: Implement scopeGetAllByTagName() method.
    }
    public function scopeMakeVariation(array $array)
    {
        // TODO: Implement scopeMakeVariation() method.
    }
    public function scopeSave(array $array)
    {
        // TODO: Implement scopeSave() method.
    }
    public function scopeSaveVariation()
    {
        // TODO: Implement scopeSaveVariation() method.
    }
    public function scopeWhere(string $arg1, string $condition, string $arg3)
    {
        // TODO: Implement scopeWhere() method.
    }
    public function scopeRender($settings)
    {
        // TODO: Implement scopeRender() method.
    }
    public function scopeRenderSettings($settings)
    {
        // TODO: Implement scopeRenderSettings() method.
    }

    public function makeConfigJson(){
        if(!\File::exists($this->config_path)){
            \File::put($this->config_path,'{}');
        }
    }
    private function getRegisters(){
        //TODO: return array of all registered items
    }

    // make a path
    public function makePath($path){
        return $this->base_path.$path.DS.'config.json';
    }
    // validate if file exist
    public function validate($path){
        if(!\File::exists($path)){
            throw new \Error('File does not found',404);
        }
        return true;
    }
    // if slug or path is invalid
    public function validateSlugWithPath($content){
        if(!isset($content["slug"])){
            throw new \Error('Slug does not found',404);
        }
        if(!isset($content["path"])){
            throw new \Error('Path does not found',404);
        }
        return true;
    }

    public function scopeRegistration($unit_path){
        $full_path = $this->makePath($unit_path);
        $this->validate($full_path);

        $get_content = json_decode(\File::get($full_path),true);
        $this->validateSlugWithPath($get_content);

        $slug = $get_content["slug"];
        $path = $get_content["path"];

        $object = [$slug => $path];

        $this->makeConfigJson();

        \File::put($this->config_path,json_encode($object));
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
            return call_user_func_array([$this,$method], $arguments);
        }
    }

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        $result = isset($this->toArray()[$name]) ? true : false;
        return $result;
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
        if (method_exists($_this, $method)
            && is_callable(array($_this, $method))
        ) {
            return call_user_func_array([$_this,$method], $arguments);
        }
    }
}