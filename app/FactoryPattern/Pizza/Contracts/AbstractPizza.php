<?php

namespace App\FactoryPattern\Pizza\Contracts;

use App\FactoryPattern\Pizza\Contracts\PizzaInterface;

abstract class AbstractPizza implements PizzaInterface
{
    /**
     * @var string $name 披薩名稱
     * @var string $dough 麵團類型
     * @var string $sauce 醬料類型
     * @var array $toppings 佐料
     */
    public $name;
    public $dough = '普通麵團';
    public $sauce = '一般醬料';
    public $toppings = [];

    public function prepare()
    {
        echo "{$this->name} 準備中 \n";
        echo "捏揉{$this->dough}... \n";
        echo "加入{$this->sauce}... \n";

        $this->addToppings();
    }

    private function noToppings()
    {
        return count($this->toppings) == 0;
    }

    private function addToppings()
    {
        $toppings = $this->toppings;

        if ($this->noToppings()) {
            return;
        }


        echo "加入佐料: \n";

        foreach ($toppings as $key => $topping) {
            echo "      $topping \n";
        }
    }

    public function bake()
    {
        echo "以溫度350度烘烤25分鐘 \n";
    }

    public function cut()
    {
        echo "將披薩切片 \n";
    }

    public function box()
    {
        echo "裝進官方的披薩盒 \n";
    }
}