<?php

namespace App\DecoratorPattern\Burger\ConcreteComponent;

use App\DecoratorPattern\Burger\Contracts\Food;

abstract class Burger implements Food
{
    protected $name = '未知品項';

    public function getDescription()
    {
        return $this->name . '：';
    }
}
