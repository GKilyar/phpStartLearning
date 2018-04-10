<?php
//外部函数调用时，内部函数自动进入全局域，成为新定义的函数
function out(){
    if(!function_exists('in')) {
        function in(){
            echo '外部函数没有被调用，in是不会被调用的';
        }
    }
}
//in();
out();
in();
out();


//多层嵌套
function f_out(){
    echo 'out \n';
    function f_mid(){
        echo 'mid \n';
        function in(){
            echo 'in \n';
        }
    }
}
//调用顺序是out mid in



