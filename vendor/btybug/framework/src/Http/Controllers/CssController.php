<?php
/**
 * Copyright (c) 2017. All rights Reserved BtyBug TEAM
 */

namespace Btybug\Framework\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PhpJsonParser;
use Illuminate\Http\Request;
use Btybug\Framework\Repository\VersionsRepository;
use Btybug\Framework\Services\SettingsService;
use Btybug\btybug\Repositories\AdminsettingRepository;

/**
 * Class SystemController
 * @package App\Modules\Settings\Http\Controllers
 */
class CssController extends Controller
{
    public function getIndex(Request $request, $type = "buttons")
    {
        $directories = PhpJsonParser::getFoldersWithChildrens();

        $slug = $request->get('type',$type);
        return view('framework::css.list', compact(['slug','directories']));
    }
    public function saveStyle(Request $request){
        $type = $request->type;
        $class_name = $request->class_name;
        $code = $request->code;
        \File::append(base_path('public'.DS.'dinamiccss'.DS.$type.'.css'), '.'.$class_name.' {'.$code.'}');
        return redirect()->back()->with("success","Style was saved successfully");
    }
    public function createFolder(){
        $path = base_path('public'.DS.'dinamiccss');
        $new_folder_name = "new_".str_random(4).rand(111,999);
        $full_path = $path.DS.$new_folder_name;
        mkdir($full_path,0777);
        return redirect()->back()->with("success","Group was added successfully");
    }
    public function createFile($dirname){
        $path = base_path('public'.DS.'dinamiccss'.DS.$dirname);
        $file_name = "new_".str_random(4).rand(111,999);
        $full_path = $path.DS.$file_name.".css";
        if (!\File::exists($full_path)){
            \File::put($full_path,'');
        }else{
            return redirect()->back()->with("error","File name exists");
        }
        return redirect()->back()->with("success","File was created successfully");
    }
}
