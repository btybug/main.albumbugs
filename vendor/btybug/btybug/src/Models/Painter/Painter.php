<?php
/**
 * Created by PhpStorm.
 * User: hook
 * Date: 12/11/2017
 * Time: 11:54 PM
 */

namespace Btybug\btybug\Models\Painter;


use Btybug\btybug\Models\ExtraModules\config;
use Btybug\btybug\Models\Painter\PainterInterface;
use Illuminate\Contracts\Support\Arrayable;
use League\Flysystem\Exception;
use Psy\Exception\ErrorException;

class Painter implements PainterInterface,Arrayable
{
    protected $config_path;
    protected $base_path;
    protected $attributes = [];

    public function __construct()
    {
        $this->config_path = storage_path(config('painter.CONFIG'));
        $this->base_path = resource_path(config('painter.PAINTERSPATH'));
    }
    public function toArray()
    {
        // TODO: Implement toArray() method.
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
    public function makeConfigJson(){
        if(!\File::exists($this->config_path)){
            \File::put($this->config_path,'{}');
        }
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
}