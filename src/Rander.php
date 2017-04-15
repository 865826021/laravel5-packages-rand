<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/15
 * Time: 16:27
 */

namespace Yuxiaoyang\Rander;

class Rander {

    //生成$length 长度的随机字符串
    function make($length)
    {
        if(!isset($length) && !is_numeric($length)){
            return "参数错误！";
        }
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
        $key = "";
        for($i=0;$i<$length;$i++)
        {
            $key .= $pattern{mt_rand(0,35)};
        }
        return $key;
    }

}