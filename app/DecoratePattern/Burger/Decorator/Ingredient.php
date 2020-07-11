<?php

namespace App\DecoratePattern\Burger\Decorator;

use App\DecoratePattern\Burger\Burger as BaseIngredient;

abstract class Ingredient extends BaseIngredient
{
    /**
     * @var BaseIngredient|Ingredient
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
        if ($this->ingredient instanceof Ingredient) {
            $this->ingredient->customize($demand);
        }

        return $this;
    }
}
