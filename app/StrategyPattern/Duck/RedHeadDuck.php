<?php

namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\OriginDuck;
use App\StrategyPattern\Duck\PerformQuack\Quack;
use App\StrategyPattern\Duck\PerformFly\FlyWithWings;

class RedHeadDuck extends OriginDuck
{
    public function __construct()
    {
        $this->name = '紅頭鴨';
        $this->FlyBehavior = new FlyWithWings();
        $this->QuackBehavior = new Quack();
    }

    public function display()
    {
        echo "外觀是紅頭的 \n";
    }
}
