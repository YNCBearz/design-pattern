<?php

namespace App\DecoratePattern\Burger\ConcreteComponent;

use App\DecoratePattern\Burger\Burger;

class BigMac extends Burger
{
    protected $name = '大麥克';

    public function getDescription()
    {
        return $this->name . '：';
    }
}
