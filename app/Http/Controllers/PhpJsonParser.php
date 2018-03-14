<?php
/**
 * Created by PhpStorm.
 * User: hook
 * Date: 1/18/2018
 * Time: 5:55 AM
 */

namespace App\Http\Controllers;


class PhpJsonParser
{
   public static function getClasses($path){
       $file = \File::get($path);

      // preg_match_all('/([a-z0-9]\.?.*?)\s?\{/', $file, $matches);
       preg_match_all('/(?<=\.)((?!:hover).)*(?=.{)/', $file, $matches);

       preg_match_all('/(?<=\/\*).+(?=\*\/)/', $file, $match);

       $html = '';

       if(count($matches[0])){
           $html = self::renderHtml($matches[0],$match[0]);
       }

       return $html;
   }
   public static function renderHtml($data,$desc=[]){
       $str = '';
       foreach ($data as $key => $item){
           if(isset($desc[$key])){
               $str .= "<option value='".$item."'>".$desc[$key]."</option>";
           }else{
               $str .= "<option value='".$item."'>".$item."</option>";
           }
       }
       return $str;
   }

   public static function getClassesForDemo($path){
       $file = \File::get($path);

       // preg_match_all('/([a-z0-9]\.?.*?)\s?\{/', $file, $matches);
       preg_match_all('/(?<=\.)((?!:hover).)*(?=.{)/', $file, $matches);

       preg_match_all('/(?<!:hover \{)(?<=\{)(.*?)(?=\})/s', $file, $match);

       $html = '';

       if(count($matches[0])){
           $html = self::renderHtmlForDemo($matches[0],$match[0]);
       }

       return $html;
   }

    public static function getClassesCssFileDemo($filename,$path){
        $file = self::getFileByName($filename,$path);
        if(!$file){
            return null;
        }
        $file = \File::get($file->getPathname());
       // preg_match_all('/\.[a-z_-][\w-:]*(?=[^{}]*{[^{}]*})/', $file, $matches);
       // preg_match_all('/(\{)(?<=\{)(.*?)(?=\})/s', $file, $match);

       // preg_match_all('/(?<=\.)((?!:hover)\w+)(?=.{)/', $file, $matches);
      //  preg_match_all('/(?<!:hover\{)(?<=\{)(.*?)(?=\})/s', $file, $match);
       /* $html = [];
        if(count($matches[0])){
            $html["data"] = $matches[0];
            $html["codes"] = $match[0];
        }*/
       $file = explode("}",$file);
        return $file;
    }
    public static function renderHtmlForDemo($data,$codes){
        $str = '';
        foreach ($data as $key => $item){
            $str .= "<div class='col-md-12'><div class='col-md-4'><img src='".asset("public/images/default.jpg")."' class='".$item." custom_div_width'></div><div class='col-md-8'><h5>".$item."</h5><textarea class='code_textarea form-control' readonly>".$item."{".$codes[$key]."}</textarea></div></div>";
        }
        return $str;
    }
    public static function getFoldersWithChildrens($path){

       $dirs = \File::directories($path);
           $arr = [];
       if(count($dirs)){
           foreach ($dirs as $key => $dir){
               $name = explode(DS,$dir);
               $name = $name[count($name)-1];
                $arr[$key]["dirname"] = $name;
                $arr[$key]["children"] = \File::allFiles($dir);
                $arr[$key]["children_dirs"] = PhpJsonParser::getFoldersWithChildrens($path.DS.$name);
           }
       }
           return $arr;
    }
    public static function getFileByName($filename,$path){
        $dirs = \File::directories($path);
        if(count($dirs)){
            foreach ($dirs as $key => $dir){
                $all = \File::allFiles($dir);
                foreach ($all as $file){
                    $basename = $file->getBasename();
                    if($basename === $filename.".css"){
                        return $file;
                    }
                }
            }
        }
    }
    public static function renameFolder($old_name,$new_name,$path){
        $dirs = \File::directories($path);
        if(count($dirs)){
            foreach ($dirs as $key => $dir){
                $original = \File::name($dir);
                if($original === $old_name){
                    $should_be_renamed = $path.DS.$new_name;
                    return \File::move($dir,$should_be_renamed);
                }
            }
        }
    }

    public static function renderName($original_name){
        foreach ($original_name as $ind => $to_up){
            $name[$ind] = ucfirst($to_up);
        }
        $name = implode(' ',$name);
        return $name;
    }
    public static function generateSlug($name){
       $name = explode(" ",$name);
        foreach ($name as $ind => $to_lo){
            $name[$ind] = lcfirst($to_lo);
        }
        $name = implode('_',$name);
        return $name;
    }

}