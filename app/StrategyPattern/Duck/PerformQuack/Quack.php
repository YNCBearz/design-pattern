<?php
namespace App\StrategyPattern\Duck\PerformQuack;

use App\StrategyPattern\Duck\PerformQuack\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "呱呱叫 \n";
    }
}