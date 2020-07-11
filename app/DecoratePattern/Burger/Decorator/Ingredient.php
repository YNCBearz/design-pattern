<?php

namespace App\DecoratePattern\Burger\Decorator;

use App\DecoratePattern\Burger\Burger as BaseIngredient;

abstract class Ingredient extends BaseIngredient
{
    /**
     * @var BaseIngredient
     */
    protected $ingredient;

    protected $sauce = 'normal';
    protected $cheese = 'normal';
    protected $pickle = 'normal';

    protected $name = '配料';

    public function __construct(BaseIngredient $ingredient)
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
        if ($this->ingredient instanceof self) {
            $this->ingredient->customize($demand);
        }

        foreach ($demand as $option => $value) {
            $this->$option = $value;
        }

        return $this;
    }
}
