<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/10
 * Time: 12:04
 */

/*
 *  can change the args make it 2ways
 * */
function get_sum(){
    $args_num = func_num_args();
    $sum = 0;
    if($args_num ==0){
        return $sum;
    }else{
        for ($i=0;$i<$args_num;$i++){
            $sum+=func_get_arg($i);
        }

        return $sum;
    }
}

echo get_sum(),"\n";
echo get_sum(1,2,6),"\n";

function get_sum2(...$nums){
    $sum = 0;
    if(!$nums){
        return $sum;
    }else{
        foreach ($nums as $item) {
            $sum +=$item;
        }

        return $sum;
    }
}

echo get_sum2(1,23,4,4,5345,5),"\n";


//
function swap(&$a,&$b){
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

$a1 = 3;
$b1 = 5;
swap($a1,$b1);
echo '$a1:',$a1,'          $b1:',$b1;



