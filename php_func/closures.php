<?php
$message ="Hello";
$exa = function () use($message){
    echo $message,"\n";
};

$exa();


//通过引用传递改变变量

$message ="Hello";
$exa = function ($name) use(&$message){
    echo $message,"\n";
    echo 'username:'.$name;
};


$message = "Hi";
$exa('alli');




//这种用法在php的用法无处不在
function test_closure($name,Closure $clo){
    echo $name,"\n","先处理一些不太紧要的部分";
    $clo();
}

test_closure("aili",function (){
    echo "开始处理真正必要的部分";
    echo "<br/>";
    echo "闭包重定向";
});

