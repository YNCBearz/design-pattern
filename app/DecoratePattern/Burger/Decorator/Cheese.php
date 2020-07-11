<?php

namespace App\DecoratePattern\Burger\Decorator;

use App\DecoratePattern\Burger\Decorator\Ingredient;

class Cheese extends Ingredient
{
    protected $name = '起司';

    protected $cheese = 'normal';

    public function getDescription()
    {
        if ($this->cheese == 'double') {
            return $this->ingredient->getDescription() . '兩倍' . $this->name . '、';
        }

        return parent::getDescription();
    }

    /**
     * @param array $demand
     * @return Ingredient
     */
    public function customize($demand)
    {
        if (isset($demand['cheese'])) {
            $this->cheese = $demand['cheese'];
        }

        return parent::customize($demand);
    }
}
