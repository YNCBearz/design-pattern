<?php

namespace App\DecoratePattern\Burger;

abstract class Burger
{
    protected $name = '未知品項';

    abstract public function getDescription();
}
