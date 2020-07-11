<?php

namespace App\DecoratePattern\Burger\Decorator;

use App\DecoratePattern\Burger\Decorator\Ingredient;

class Pickle extends Ingredient
{
    protected $name = '酸菜';

    protected $pickle = 'normal';

    public function getDescription()
    {
        if ($this->pickle == 'none') {
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
        if (isset($demand['pickle'])) {
            $this->pickle = $demand['pickle'];
        }

        return parent::customize($demand);
    }
}
