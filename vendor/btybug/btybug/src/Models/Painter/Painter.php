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
use View;

class Painter extends BasePainter
{
    /**
     * @return mixed
     */
    public function getStoragePath()
    {
       return config('painter.PAINTERSPATHS');
    }

    /**
     * @return mixed
     */
    public function getConfigPath()
    {
        return storage_path(config('painter.CONFIG'));
    }

    public function scopeFindByVariation($id){
        $slug = explode('.', $id);
        $tpl = Painter::find($slug[0]);

        return $tpl;
    }

    public function scopeRenderLivePreview(string $slug)
    {
        $ui = $model = $this->findByVariation($slug);

        if (!$ui) {
            return false;
        }
        $variation = $ui->variations(false)->find($slug);

        $settings = [];
        if(count($variation->settings) > 0){
            $settings = $variation->settings;
        }

        $body = url('/admin/uploads/gears/settings-iframe', $slug);
        $dataSettings = url('/admin/uploads/gears/settings-iframe', $slug) . '/settings';
        $data['body'] = $body;
        $data['settings'] = $dataSettings;

        return view('uploads::gears.units.preview', compact(['model',"ui", 'data', 'settings', 'variation']));
    }

    public function scopeRenderSettings($variables=null)
    {
        $path = $this->getPath();
        $variables['tplPath'] = $path;
        $variables['_this'] = $this;
        $slug = $this->getSlug();

        $is_wrong = $this->validateSettings('settings.blade.php');

        if ($is_wrong){
            return $is_wrong;
        }

        View::addLocation($path);
        View::addNamespace("$slug", $path);

        return View::make("$slug::settings")->with($variables)->render();
    }

    public function scopeRenderLive(array $variables = [])
    {

        $slug = $this->getSlug();
        $path = $this->getPath();
        View::addLocation($path);
        View::addNamespace("$slug", $path);

        if ($this->autoinclude){
            return $this->getAutoInclude()->render($variables['variation']->toArray(), "$slug::");
        }
        if ($this->example) {
            $tpl = $this->example;
        } elseif ($this->main_file) {
            $tpl = str_replace(".blade.php", "", $this->main_file);
            if (isset($variables['view_name'])) {
                $tpl = $variables['view_name'];
            }
        } else {
            $tpl = "tpl";
        }
        $this->path  = $path;
        return View::make("$slug::$tpl")->with($variables)->with(['tplPath' => $path, '_this' => $this])->render();
    }
    public function getPath()
    {
        return base_path($this->path);
    }

}