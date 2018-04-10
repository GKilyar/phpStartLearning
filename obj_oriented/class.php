<?php
class Compter{
    public $cpu = 'i7 9700k';
    public $mainboard = '华硕9000x';
    private $hd = 1024;

    public function game($gamename='')
    {
        if ($this->getSize() < 2000){
            echo "硬盘大小玩儿不了游戏";
            return false;
        }
        return true;
    }
    public function job($work='写代码')
    {
        echo ($this->game());
    }

    private function getSize(){
        return $this->hd;
    }
}
$computer = new Compter();
$computer->job();