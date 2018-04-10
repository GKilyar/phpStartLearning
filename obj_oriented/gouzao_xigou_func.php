<?php
 //对象在初始化的时候进行一些初始动作
 //对象在收回时执行一些方法

//构造 对象被创建时创建一些方法
//析构 对象被销毁时


class Computer{
    //构造方法
    public function __construct()
    {
        echo "cpu就绪";
        echo "主板就绪";
        echo "内存就绪";
    }

    public function game()
    {
        echo "---gaming!!---";
    }
}



$computer = new Computer();
$computer->game();