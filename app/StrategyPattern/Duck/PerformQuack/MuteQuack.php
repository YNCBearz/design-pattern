<?php
namespace App\StrategyPattern\Duck\PerformQuack;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "（靜悄悄） \n";
    }
}