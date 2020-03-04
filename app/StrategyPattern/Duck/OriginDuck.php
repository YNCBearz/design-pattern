<?php
namespace App\StrategyPattern\Duck;

abstract class OriginDuck
{
    protected $name = '原型鴨';

    public function quack()
    {
        echo "呱呱叫 \n";
    }

    public function swim()
    {
        echo "我會游泳噢 \n";
    }

    public function fly()
    {
        echo "我在天上飛～ \n";
    }

    /**
     * 每種鴨子的外觀不同
     */
    abstract function display();

    public function show()
    {
        echo "我是" . $this->name . "\n";

        $this->display();
        $this->quack();
        $this->fly();
        $this->swim();

        echo "----------- \n";
    }
}