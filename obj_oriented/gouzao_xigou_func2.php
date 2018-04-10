<?php

class Computer{
    public function game()
    {
        echo "---gaming!!---";
    }
    //析构
    public function __destruct()
    {
        echo "关闭电源是！！";
    }
}



$computer = new Computer();
$computer->game();
unset($computer);
echo "游戏打完了！";


class ComputerScience{
    //类常量
    const YES = true;
    const NO = false;
    const ONE = 1;
    const TWO = self::ONE+1;
}

var_dump(ComputerScience::TWO);

