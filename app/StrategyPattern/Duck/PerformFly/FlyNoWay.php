<?php
namespace App\StrategyPattern\Duck\PerformFly;

use App\StrategyPattern\Duck\PerformFly\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        //
    }
}