<?php

namespace App\DecoratePattern\Burger\Decorator;

use App\DecoratePattern\Burger\Decorator\Ingredient;

class Salad extends Ingredient
{
    protected $name = '沙拉';

    protected $salad = 'normal';

    public function getDescription()
    {
        if ($this->salad == 'none') {
            return $this->food->getDescription();
        }

        return parent::getDescription();
    }

    /**
     * @param array $demand
     * @return Ingredient
     */
    public function customize($demand)
    {
        parent::changeDefaultIfDemanded($demand, 'salad');
        return parent::customize($demand);
    }
}
