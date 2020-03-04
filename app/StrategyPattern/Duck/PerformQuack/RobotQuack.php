<?php

namespace App\StrategyPattern\Duck\PerformQuack;

use App\StrategyPattern\Duck\PerformQuack\QuackBehavior;

class RobotQuack implements QuackBehavior
{
    public function quack()
    {
        echo "逼逼逼 （發出機械音） \n";
    }
}
