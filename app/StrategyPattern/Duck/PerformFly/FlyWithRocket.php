<?php

namespace App\StrategyPattern\Duck\PerformFly;

use App\StrategyPattern\Duck\PerformFly\FlyBehavior;

class FlyWithRocket implements FlyBehavior
{
    public function fly()
    {
        echo "我用火箭飛 \n";
    }
}
