<?php
class Dad{

    public function __construct()
    {
        echo "dad init........";
    }

    protected function K($name){
        echo "Im ". $name ." dad";
    }
}
class Son extends Dad {
    public function __construct()
    {
        //先调用父类的构造方法然后调用子类的
        parent::__construct();
        echo "son extend from dad","\n";
    }

    public function r($name){
        $this->k($name);
    }
}

$aili = new Son();
$aili->r("aili's");


/**
 * Class final_dad  final关键字 是不希望这个类被子类继承
 */
final class final_dad{
}