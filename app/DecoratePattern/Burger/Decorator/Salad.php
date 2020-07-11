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

    /**
     * @param array $demand
     * @return Ingredient
     */
    public function customize($demand)
    {
        if (isset($demand['sauce'])) {
            $this->sauce = $demand['sauce'];
        }

        return parent::customize($demand);
    }
}
