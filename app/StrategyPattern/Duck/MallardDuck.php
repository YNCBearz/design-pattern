<?php
namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\OriginDuck;
use App\StrategyPattern\Duck\PerformQuack\Quack;
use App\StrategyPattern\Duck\PerformFly\FlyWithWings;

class MallardDuck extends OriginDuck
{
    public function __construct()
    {
        $this->name = '綠頭鴨';
        $this->FlyBehavior = new FlyWithWings();
        $this->QuackBehavior = new Quack();
    }

    public function display()
    {
        echo "外觀是綠頭的 \n";
    }
}