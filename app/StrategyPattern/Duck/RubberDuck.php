<?php

namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\OriginDuck;
use App\StrategyPattern\Duck\PerformFly\FlyNoWay;
use App\StrategyPattern\Duck\PerformQuack\Squeak;

class RubberDuck extends OriginDuck
{
    public function __construct()
    {
        $this->name = '橡皮鴨';
        $this->FlyBehavior = new FlyNoWay();
        $this->QuackBehavior = new Squeak();
    }

    public function display()
    {
        echo "外觀是橡皮的 \n";
    }
}
