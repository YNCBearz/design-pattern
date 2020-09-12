<?php
namespace App\FactoryPattern\Pizza\NewYork;

use App\FactoryPattern\Pizza\Sauce\SpecialSauce;
use App\FactoryPattern\Pizza\Dough\AncestralDough;
use App\FactoryPattern\Pizza\Contracts\IngredientFactoryInterface;

/**
 * 有了紐約原料工廠，我們就能依據情況供應對應的原料。(例如新鮮食材或冷凍食材)
 * 而不必特地做出「紐約風披薩」，改以原料注入的方式來替換披薩本身。
 */
class NYStyleIngredientFactory implements IngredientFactoryInterface
{
    public function createDough()
    {
        return new AncestralDough();
    }

    public function createSauce()
    {
        return new SpecialSauce();
    }
}