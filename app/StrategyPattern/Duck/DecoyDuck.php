<?php
namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\OriginDuck;
use App\StrategyPattern\Duck\PerformFly\FlyNoWay;
use App\StrategyPattern\Duck\PerformQuack\MuteQuack;

class DecoyDuck extends OriginDuck
{
    public function __construct()
    {
        $this->name = '誘餌鴨';
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }

    public function display()
    {
        echo "外觀是誘餌鴨 \n";
    }
}