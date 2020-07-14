<?php

namespace App\DecoratePattern\Burger\ConcreteComponent;

use App\DecoratePattern\Burger\Contracts\Food;

abstract class Burger implements Food
{
    protected $name = '未知品項';

    public function getDescription()
    {
        return $this->name . '：';
    }
}
