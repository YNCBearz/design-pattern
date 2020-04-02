<?php
namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Pizza\Contracts\AbstractPizza;
use App\FactoryPattern\Pizza\Contracts\IngredientFactoryInterface;

class PepperoniPizza extends AbstractPizza
{
    public function __construct(IngredientFactoryInterface $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }
}