<?php
	require_once('config.php');
    $con = mysqli_connect(HOST,USERNAME,PASSWORD,test);
    if(!$con){
        echo "连接失败",mysqli_error($con);
    }

    mysqli_query($con,'set names utf8');


?>