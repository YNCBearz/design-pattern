<?php

namespace App\DecoratePattern\Burger\Decorator;

use App\DecoratePattern\Burger\Contracts\Food;
use App\DecoratePattern\Burger\ConcreteComponent\Burger;

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
     * 讓最後一個裝飾者客製化自己外，也能客製化先前的裝飾者
     *
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

    /**
     * @param array $demand
     * @param string $option
     */
    protected function changeDefaultIfDemanded($demand, $option)
    {
        if (isset($demand[$option])) {
            $this->$option = $demand[$option];
        }
    }
}
