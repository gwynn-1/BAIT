<?php
/**
 * Created by PhpStorm.
 * User: Huy
 * Date: 2/6/2018
 * Time: 10:32 AM
 */

namespace App\API;
use Illuminate\Support\Facades\DB;

class TokenCreator
{
    public static function createToken($table,$field){
        do{
            $str = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
            $str_len = strlen($str);
            $result='';
            for($i=0;$i<32;$i++){
                $num = rand(0,$str_len-1);
                $result .= substr($str,$num,1);
            }

        }while(DB::table($table)->where($field,$result)->count() > 0);
        return $result;
    }
}