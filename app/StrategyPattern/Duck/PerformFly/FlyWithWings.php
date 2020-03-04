<?php
namespace App\StrategyPattern\Duck\PerformFly;

use App\StrategyPattern\Duck\PerformFly\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "我在天上飛～ \n";
    }
}

