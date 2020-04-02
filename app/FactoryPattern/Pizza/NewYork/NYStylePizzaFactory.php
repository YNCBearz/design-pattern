<?php
namespace App\FactoryPattern\Pizza\NewYork;

use App\FactoryPattern\Pizza\ClamPizza;
use App\FactoryPattern\Pizza\CheesePizza;
use App\FactoryPattern\Pizza\Contracts\AbstractPizza as Pizza;
use App\FactoryPattern\Pizza\NewYork\NYStyleIngredientFactory;

class NYStylePizzaFactory
{
    public function createPizza($type): Pizza
    {
        $ingredientFactory = new NYStyleIngredientFactory();

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->name = '紐約風起司披薩';
                $pizza->toppings = ['義大利高級乾酪'];
                break;

            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->name = '紐約風蛤蜊披薩';
                $pizza->toppings = ['龍蝦蟹肉棒'];
                break;
        }

        return $pizza;
    }
}