<?php
namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Pizza\Dough\GeneralDough;
use App\FactoryPattern\Pizza\Sauce\GeneralSauce;
use App\FactoryPattern\Pizza\Contracts\IngredientFactoryInterface;

class FounderIngredientFactory implements IngredientFactoryInterface
{
    public function createDough()
    {
        return new GeneralDough();
    }

    public function createSauce()
    {
        return new GeneralSauce();
    }
}