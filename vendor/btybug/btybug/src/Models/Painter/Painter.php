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

class Painter extends BasePainter
{
    /**
     * @return mixed
     */
    public function getStoragePath()
    {
       //TODO: return path to units root directory
    }

    /**
     * @return mixed
     */
    public function getConfigPath()
    {
        //TODO: return path to units registration file
    }


}