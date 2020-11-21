<?php

namespace App\DecoratorPattern\Burger\Decorator;

use App\DecoratorPattern\Burger\Decorator\Ingredient;

class Cheese extends Ingredient
{
    protected $name = '起司';

    protected $cheese = 'normal';

    public function getDescription()
    {
        if ($this->cheese == 'double') {
            return $this->food->getDescription() . '兩倍' . $this->name . '、';
        }

        return parent::getDescription();
    }
}
