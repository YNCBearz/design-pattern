<?php
namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\OriginDuck;
use App\StrategyPattern\Duck\PerformFly\FlyNoWay;
use App\StrategyPattern\Duck\PerformQuack\RobotQuack;
use App\StrategyPattern\Duck\PerformFly\FlyWithRocket;

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

    public function show()
    {
        echo "我是" . $this->name . "\n";

        $this->display();
        $this->performQuack();
        $this->performFly();
        $this->setFlyBehavior(new FlyWithRocket());
        $this->performFly();
        $this->swim();

        echo "----------- \n";
    }
}