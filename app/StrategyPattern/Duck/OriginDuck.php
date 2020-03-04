<?php
namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\PerformFly\FlyBehavior;
use App\StrategyPattern\Duck\PerformQuack\QuackBehavior;

abstract class OriginDuck
{
    /**
     * @var string $name
     * @var FlyBehavior $FlyBehavior
     * @var QuackBehavior $QuackBehavior
     */
    protected $name = '命名尚未設定';
    protected $flyBehavior;
    protected $quackBehavior;


    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo "我會游泳噢 \n";
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    /**
     * 每種鴨子的外觀不同
     */
    abstract function display();

    public function show()
    {
        echo "我是" . $this->name . "\n";

        $this->display();
        $this->performQuack();
        $this->performFly();
        $this->swim();

        echo "----------- \n";
    }

    protected function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }
}