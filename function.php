<?php
/**
 * Created by PhpStorm.
 * User: met
 * Date: 2019/3/28
 * Time: 22:23
 */
/**
 * @title 获取指定长度的随机字符串
 * @description 可以添加前缀
 * @param string $name_space
 * @param int $length
 * @param string $str
 * @return string
 */
function randomNum($name_space = '', $length = 64, $str = '')
{

    if(strlen($str) >= $length){
        $str = mb_substr($str, 0, $length);
        if($name_space)$str = $name_space . mb_substr($str, strlen($name_space));
        return $str;
    };
    $data = uniqid(mt_rand(), true);
    $data .= $_SERVER['REMOTE_ADDR'];
    $str .= md5($data);
    return randomNum($name_space, $length, $str);
}
/**
 * @title 获取指定长度随机字符串
 * @description 使用随机的hash算法
 * @param string $name_space
 * @param int $length
 * @param string $str
 * @return string
 */
function randomNum_1($name_space = '', $length = 64, $str = '')
{
    if(strlen($str) >= $length){
        $str = mb_substr($str, 0, $length);
        if($name_space)$str = $name_space . mb_substr($str, strlen($name_space));
        return $str;
    };
    $data = uniqid(mt_rand(), true);
    $data .= $_SERVER['REMOTE_ADDR'];
    $hash_algos = hash_algos();
    $algorithm = $hash_algos[array_rand($hash_algos, 1)];
    $str .= hash($algorithm, $data);
    return randomNum_1($name_space, $length, $str);
}
/**
 * @title 获取指定长度的随机字符串
 * @description 可以自定义字符串的格式例如 randomNum_2('LK', '10-20-30')
 * @param string $name_space
 * @param int $length
 * @param string $str
 * @return bool|string
 */
function randomNum_2($name_space = '', $length = 64, $str = '')
{
    if(!is_numeric($length) && !is_string($length))return false;
    $max_length = $length;
    $length_arr = array();
    $hyphen = chr(45);// "-"
    if(!is_numeric($length)){
        $length_arr = explode($hyphen, $length);
        $max_length = array_sum($length_arr);
    }
    if(strlen($str) >= $max_length){
        $str = mb_substr($str, 0, $max_length);
        if($name_space)$str = $name_space . mb_substr($str, strlen($name_space));
        if($max_length !== $length){
            $str_tmp = '';
            $i = 0;
            foreach($length_arr as $item){
                $str_tmp .= mb_substr($str, $i, $item) . $hyphen;
                $i = $item;
            }
            $str = rtrim($str_tmp, $hyphen);
        }
        return $str;
    };
    $data = uniqid(mt_rand(), true);
    $data .= $_SERVER['REMOTE_ADDR'];
    $hash_algos = hash_algos();
    $algorithm = $hash_algos[array_rand($hash_algos, 1)];
    $str .= hash($algorithm, $data);
    return randomNum_2($name_space, $length, $str);
}
