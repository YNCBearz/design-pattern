<?php

namespace App\DecoratePattern\Burger;

abstract class Burger
{
    protected $name = '未知品項';

    public function getDescription()
    {
        return $this->name . '：';
    }
}
