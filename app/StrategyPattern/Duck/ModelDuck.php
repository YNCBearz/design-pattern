<?php
namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\OriginDuck;
use App\StrategyPattern\Duck\PerformFly\FlyNoWay;
use App\StrategyPattern\Duck\PerformQuack\RobotQuack;

class ModelDuck extends OriginDuck
{
    public function __construct()
    {
        $this->name = '模型鴨';
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new RobotQuack();
    }

    public function display()
    {
        echo "外觀是機械的 \n";
    }
}