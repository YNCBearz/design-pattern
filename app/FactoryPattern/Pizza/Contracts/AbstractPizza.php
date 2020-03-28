<?php

namespace App\FactoryPattern\Pizza\Contracts;

use App\FactoryPattern\Pizza\Contracts\PizzaInterface;

abstract class AbstractPizza implements PizzaInterface
{
    public $name;

    public function prepare()
    {
        echo "$this->name 準備中 \n";
    }

    public function bake()
    {
        echo "$this->name 烘烤中 \n";
    }

    public function cut()
    {
        echo "$this->name 切片中 \n";
    }

    public function box()
    {
        echo "$this->name 裝箱中 \n";
    }
}