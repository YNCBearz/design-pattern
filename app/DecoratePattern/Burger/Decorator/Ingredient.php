<?php

namespace App\DecoratePattern\Burger\Decorator;

use App\DecoratePattern\Burger\Burger;
use App\DecoratePattern\Burger\Contracts\Food;

abstract class Ingredient implements Food
{
    /**
     * @var Burger|Ingredient
     */
    protected $ingredient;

    protected $name = '配料';

    public function __construct(Food $ingredient)
    {
        $this->ingredient = $ingredient;
    }

    public function getDescription()
    {
        return $this->ingredient->getDescription() . $this->name . '、';
    }

    /**
     * @param array $demand
     * @return Ingredient
     */
    public function customize($demand)
    {
        if ($this->ingredient instanceof Ingredient) {
            $this->ingredient->customize($demand);
        }

        return $this;
    }
}
