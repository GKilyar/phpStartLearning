<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/10
 * Time: 11:44
 */
//find max_value
$arr_sum = array(0,545,3,32,364,21,56,321,561,321,536546);
$max_val = $arr_sum[0];
foreach ($arr_sum as $item) {
    if ($max_val < $item){
        $max_val = $item;
    }
}

echo $max_val;

/*
 * params
*/

//declare(strict_type = 1);
function sum($a,$b){
    return $a+$b;
}
echo sum(1,2);
echo '<br/>';
echo sum(1.5,2);