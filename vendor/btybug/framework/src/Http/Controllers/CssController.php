<?php
/**
 * Copyright (c) 2017. All rights Reserved BtyBug TEAM
 */

namespace Btybug\Framework\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PhpJsonParser;
use Btybug\Framework\Models\TableCss;
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
        $path = base_path('public'.DS.'dinamiccss');
        $directories = PhpJsonParser::getFoldersWithChildrens($path);
        $slug = $request->get('type',$type);
        return view('framework::css.list', compact(['slug','directories']));
    }
    public function saveStyle(Request $request){
        $type = $request->type;
        $full_style = $request->full_style;
        $file = PhpJsonParser::getFileByName($type);
        if(!$file){
            return redirect()->back()->with("error","File does not exists");
        }
        if($full_style){
            \File::append($file->getPathname(), $full_style);
        }
        return redirect()->back()->with("success","Style was saved successfully");
    }
    public function EditStyle(Request $request){
        $type = $request->type;
        $changed_style = $request->changed_style;
        $original_style = $request->original_style;
        $file = PhpJsonParser::getFileByName($type);
        if(!$file){
            return redirect()->back()->with("error","File does not exists");
        }
        if($original_style){
            $content = \File::get($file->getPathname(),true);
            $content = preg_replace("/(\r)+/", "", $content);
            $original_style = preg_replace("/(\r)+/", "", $original_style);
            $changed_style = preg_replace("/(\r)+/", "", $changed_style);
            $content = str_replace($original_style,$changed_style,$content);
            \File::put($file->getPathname(),$content);
            return redirect()->back()->with("success","Style was saved successfully");
        }
        return redirect()->back()->with("error","Something went wrong");
    }
    public function saveStyleWithHtml(Request $request){
        $slug = $request->type;
        $html = $request->file_html;
        $filename = PhpJsonParser::generateSlug($request->filename);
        $data = TableCss::where("slug",$slug)->first();
        if(!$data){
            abort(404);
        }
        $data->slug = $filename;
        $data->html = $html;
        if($data->save()){
            $file = PhpJsonParser::getFileByName($slug);
            $to = str_replace($file->getFilename(),$filename.".".$file->getExtension(),$file->getPathname());
            \File::move($file->getPathname(),$to);
            return redirect()->to(route("get_content")."?type=".$filename);
        }
    }
    public function createFolder(){
        $path = base_path('public'.DS.'dinamiccss');
        $new_folder_name = "new_".str_random(4).rand(111,999);
        $full_path = $path.DS.$new_folder_name;
        mkdir($full_path,0777);
        return response()->json(["dirname" => $new_folder_name]);
    }
    public function createFile($dirname){
        $path = base_path('public'.DS.'dinamiccss'.DS.$dirname);
        $file_name = "new_".str_random(4).rand(111,999);
        $full_path = $path.DS.$file_name.".css";
        if (!\File::exists($full_path)){
            \File::put($full_path,'');
            $insert = new TableCss();
            $insert->slug = $file_name;
            $insert->save();
        }else{
            return response()->json(["error" => 1]);
        }
        return response()->json(["error" => 0,"filename" => $file_name]);
    }
    public function getContent(Request $request, $type = "icons"){
        $directories = PhpJsonParser::getFoldersWithChildrens();
        $slug = $request->get('type',$type);
        $style_from_db = TableCss::where("slug",$slug)->first();
        return view('framework::css.list_for_css_files', compact(['slug','directories','style_from_db']));
    }
    public function removeDir(Request $request){
        $dirname = $request->dirname;
        $path = base_path('public'.DS.'dinamiccss'.DS.$dirname);
        $removed = \File::deleteDirectory($path);
        if($removed){
            return response()->json(["error" => 0]);
        }
        return response()->json(["error" => 1]);
    }
    public function removeFile(Request $request){
        $filename = $request->filename;
        $file = PhpJsonParser::getFileByName($filename);
        if($file){
            \File::delete($file->getPathname());
            TableCss::where("slug",$filename)->delete();
            return response()->json(["error" => 0]);
        }
        return response()->json(["error" => 1]);
    }
    public function resetFile(Request $request){
        $slug = $request->slug;
        $file = PhpJsonParser::getFileByName($slug);
        if($file){
            \File::put($file->getPathname(),'');
            TableCss::where("slug",$slug)->update([
                "html" => null
            ]);
            return response()->json(["error" => 0]);
        }
        return response()->json(["error" => 1]);
    }
    public function removeClass(Request $request){
        $slug = $request->slug;
        $classname = $request->class_name;
        $file = PhpJsonParser::getFileByName($slug);
        if($file){
            $content = \File::get($file->getPathname(),true);
            $content = preg_replace("/(\r)+/", "", $content);
            $content = str_replace($classname,'',$content);
            \File::put($file->getPathname(),$content);
            return response()->json(["error"=>0]);
        }
        return response()->json(["error"=>1]);
    }
    public function renameGroup(Request $request){
        $old_name = $request->old_name;
        $new_name = $request->new_name;
        $dir = PhpJsonParser::renameFolder($old_name,$new_name);
        if ($dir){
            return response()->json(["error"=>0,"data" => ["old_name"=>$old_name,"new_name" => $new_name]]);
        }
        return response()->json(["error"=>1]);
    }





    public function getComponent(Request $request, $type = "icons"){
        $directories = PhpJsonParser::getFoldersWithChildrens();
        $slug = $request->get('type',$type);
        $style_from_db = TableCss::where("slug",$slug)->first();
        return view('framework::css.list_for_component_files', compact(['slug','directories','style_from_db']));
    }
    public function saveStyleComponent(Request $request){
        $type = $request->type;
        $class_name = $request->class_name;
        $code = $request->code;
        $full_style = $request->full_style;
        $file = PhpJsonParser::getFileByName($type);
        if(!$file){
            return redirect()->back()->with("error","File does not exists");
        }
        if(!$class_name || !$code){
            return redirect()->back()->with("error","Class name and its styles couldn't be empty");
        }
        if($full_style){
            \File::append($file->getPathname(), $full_style);
        }
        return redirect()->back()->with("success","Style was saved successfully");
    }
    public function saveStyleWithHtmlComponent(Request $request){
        $slug = $request->type;
        $html = $request->file_html;
        $filename = PhpJsonParser::generateSlug($request->filename);
        $data = TableCss::where("slug",$slug)->first();
        if(!$data){
            abort(404);
        }
        $data->slug = $filename;
        $data->html = $html;
        if($data->save()){
            $file = PhpJsonParser::getFileByName($slug);
            $to = str_replace($file->getFilename(),$filename.".".$file->getExtension(),$file->getPathname());
            \File::move($file->getPathname(),$to);
            return redirect()->to(route("get_component")."?type=".$filename);
        }
    }
    public function createFolderComponent(){
        $path = base_path('public'.DS.'dinamiccss');
        $new_folder_name = "new_".str_random(4).rand(111,999);
        $full_path = $path.DS.$new_folder_name;
        mkdir($full_path,0777);
        return response()->json(["dirname" => $new_folder_name]);
    }
    public function createFileComponent($dirname){
        $path = base_path('public'.DS.'dinamiccss'.DS.$dirname);
        $file_name = "new_".str_random(4).rand(111,999);
        $full_path = $path.DS.$file_name.".css";
        if (!\File::exists($full_path)){
            \File::put($full_path,'');
            $insert = new TableCss();
            $insert->slug = $file_name;
            $insert->save();
        }else{
            return response()->json(["error" => 1]);
        }
        return response()->json(["error" => 0,"filename" => $file_name]);
    }
    public function removeDirComponent(Request $request){
        $dirname = $request->dirname;
        $path = base_path('public'.DS.'dinamiccss'.DS.$dirname);
        $removed = \File::deleteDirectory($path);
        if($removed){
            return response()->json(["error" => 0]);
        }
        return response()->json(["error" => 1]);
    }
    public function removeFileComponent(Request $request){
        $filename = $request->filename;
        $file = PhpJsonParser::getFileByName($filename);
        if($file){
            \File::delete($file->getPathname());
            TableCss::where("slug",$filename)->delete();
            return response()->json(["error" => 0]);
        }
        return response()->json(["error" => 1]);
    }
    public function resetFileComponent(Request $request){
        $slug = $request->slug;
        $file = PhpJsonParser::getFileByName($slug);
        if($file){
            \File::put($file->getPathname(),'');
            TableCss::where("slug",$slug)->update([
                "html" => null
            ]);
            return response()->json(["error" => 0]);
        }
        return response()->json(["error" => 1]);
    }
    public function removeClassComponent(Request $request){
        $slug = $request->slug;
        $classname = $request->class_name;
        $file = PhpJsonParser::getFileByName($slug);
        if($file){
            $content = \File::get($file->getPathname(),true);
            $content = preg_replace("/(\r)+/", "", $content);
            $content = str_replace($classname,'',$content);

            \File::put($file->getPathname(),$content);
            return response()->json(["error"=>0]);
        }
        return response()->json(["error"=>1]);
    }

}
