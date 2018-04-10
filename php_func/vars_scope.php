<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/10
 * Time: 14:49
 */
//
//局部变量
//$a1 = 4;
//function test(){
//    echo $a1;
//}
//test();

//全局变量
$g_name = 'lili';


function show_name(){
//    global $g_name;
//    echo $g_name;
    echo $GLOBALS['g_name'];
}
show_name();

//静态变量