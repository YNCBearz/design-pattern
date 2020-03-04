<?php
namespace App\StrategyPattern\Duck\PerformQuack;

use App\StrategyPattern\Duck\PerformQuack\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "吱吱叫 \n";
    }
}