<?php
/**
 * Created by PhpStorm.
 * User: Huy
 * Date: 12/24/2017
 * Time: 11:46 AM
 */
namespace App\API;

class URLCreator{

     private static function VN_to_URLstring($string){
         $array = ["a"=>["à","á","ả","ã","ạ","ă","ằ","ắ","ẳ","ẵ","ặ","â","ầ","ấ","ẩ","ẫ","ậ","A","À","Á","Ả","Ã","Ạ","Ặ","Ằ","Ắ","Ẳ","Ẵ","Ặ","Ậ","Ầ","Ấ","Ẩ","Ẫ","Ậ"],
                   "e"=>["ê","ề","ế","ể","ễ","ệ","è","é","ẻ","ẽ","ẹ","E","Ê","Ề","Ế","Ể","Ễ","Ệ","È","É","Ẻ","Ẽ","Ẹ"],
                   "o"=>["ò","ó","ỏ","õ","ọ","ồ","ố","ổ","ỗ","ô","ộ","ơ","ờ","ớ","ở","ỡ","ợ","O","Ò","Ó","Ỏ","Õ","Ọ","Ồ","Ố","Ổ","Ỗ","Ô","Ộ","Ơ","Ờ","Ớ","Ở","Ỡ","Ợ"],
                   "u"=>["ù","ú","ủ","ũ","ụ","ư","ừ","ứ","ử","ữ","ự","U","Ù","Ú","Ủ","Ũ","Ụ","Ự","Ừ","Ứ","Ử","Ữ","Ự"],
                   "i"=>["ì","í","ỉ","ĩ","ị","Ì","Í","Ỉ","Ĩ","Ị","I"],
                   "d"=>["đ","Đ"],
                   "y"=>["ỳ","ý","ỷ","ỹ","ỵ","Ỳ","Ý","Ỷ","Ỹ","Ỵ","Y"],
         ];

         foreach ($array as $nounicode=>$unicode){
             $string = str_replace($unicode,$nounicode,$string);
         }
         $string = str_replace(" ","-",$string);
         return $string;
     }

     static function htaccess_String($str){
         $str = str_replace(" - "," ",$str);
         $str = str_replace(":","",$str);
         $str = str_replace("-","",$str);
         $str = str_replace("@","",$str);
         $str = str_replace("%","",$str);
         $str = str_replace("$","",$str);
         $str = str_replace("?","",$str);
         $str = str_replace("/","",$str);
         $str = str_replace("#","",$str);
         $str = trim($str);
         $str = URLCreator::VN_to_URLstring($str);
         $str = strtolower($str);
         return $str;
     }
}