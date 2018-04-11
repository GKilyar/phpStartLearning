<?php
    header("Content-type:text/html;charset=utf-8");
    $con = mysqli_connect('localhost','root','','test');
    if($con){
        echo "连接成功";
    }else{
        echo "连接失败";
    }

//    if(mysqli::select_db ('test')){
//        echo "yes";
//    }else{
//        echo "no";
//    }
//    if(mysqli_query($con,'INSERT INTO id VALUES(1) ')){
//        echo "ok";
//    }else{
//        echo mysqli_error($con);
//        echo "no";
//    }
//
//    mysqli_close($con);

//4个fetch函数
/**
 * row
 * array
 * assoc
 * object
 */