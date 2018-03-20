<?php
/**
 * Created by PhpStorm.
 * User: menq
 * Date: 19.03.2018
 * Time: 13:57
 */

namespace Btybug\Framework\Http\Controllers;


use Btybug\btybug\Http\Controller;
use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function getIndex()
    {
        return view('framework::blades.index');
    }

    public function getLiveRender(Request $request)
    {
        $code = $request->get('code');
        $settings = $request->except('code', '_token');
        foreach ($settings as $key => $setting) {
            $code = str_replace("[$key]", $setting, $code);
        }
        \File::put(module_path('framework' . DS . 'src' . DS . 'Resources' . DS . 'Views' . DS . 'blades' . DS . 'autogen.blade.php'), $code);
        $html = \View::make('framework::blades.autogen')->render();
        return \Response::json(['error'=>false,'html'=>$html]);
    }
}