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

     //  preg_match_all('/(?<=\/\*).+(?=\*\/)/', $file, $match);
      // dd($match);
       $html = '';

       if(count($matches[0])){
           $html = self::renderHtml($matches[0]);
       }

       return $html;
   }
   public static function renderHtml($data){
       $str = '';
       foreach ($data as $item){
           $str .= "<option value='".$item."'>".$item."</option>";
       }
       return $str;
   }

}