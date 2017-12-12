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
        $this->base_path = storage_path(config('painter.PAINTERSPATH'));
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
    public function scopeRegistration($unit_path, Exception $exception){
        $full_path = $this->base_path.DS.$unit_path.DS.'config.json';

        if(!\File::exists($full_path)){
            return new ErrorException('File does not found',404,null,$unit_path);
        }

        $get_content = \File::get($full_path);
        dd($get_content);

    }
}