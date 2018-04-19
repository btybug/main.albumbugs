<?php
/**
 * Created by PhpStorm.
 * User: menq
 * Date: 19.04.2018
 * Time: 11:07
 */

namespace Btybug\btybug\Models\Universal;


class CmsEditor
{
    public static $instance;

    public function __construct()
    {

    }
    public static function __callStatic($name, $arguments)
    {
        $method = 'scope' . ucfirst($name);
        $_this = new static;
        if (method_exists($_this, $method)
            && is_callable(array($_this, $method))
        ) {
            return call_user_func_array([$_this, 'scope' . ucfirst($name)], $arguments);
        }
    }
    public function scopeShowEditor()
    {
        $settings=[];
        $html = \View::make('btybug::editor.show_editor',compact('settings'))->render();
        return $html;
    }

    public function showResult()
    {

    }


}