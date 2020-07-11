<?php

namespace App\DecoratePattern\Burger\Decorator;

use App\DecoratePattern\Burger\Decorator\Ingredient;

class Salad extends Ingredient
{
    protected $name = '沙拉';

    protected $sauce = 'normal';

    public function getDescription()
    {
        if ($this->sauce == 'none') {
            return $this->ingredient->getDescription();
        }

        return parent::getDescription();
    }
}
