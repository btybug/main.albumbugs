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
    public static function renderHtmlForDemo($data,$codes){
        $str = '';
        foreach ($data as $key => $item){
            $str .= "<div class='col-md-12'><div class='col-md-4'><img src='".asset("public/images/default.jpg")."' class='".$item." custom_div_width'></div><div class='col-md-8'><h5>".$item."</h5><textarea class='code_textarea form-control'>".$item."{".$codes[$key]."}</textarea></div></div>";
        }
        return $str;
    }

}