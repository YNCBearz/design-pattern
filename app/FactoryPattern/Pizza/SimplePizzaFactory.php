<?php
namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Pizza\ClamPizza;
use App\FactoryPattern\Pizza\CheesePizza;
use App\FactoryPattern\Pizza\PepperoniPizza;
use App\FactoryPattern\Pizza\FounderIngredientFactory;
use App\FactoryPattern\Pizza\Contracts\AbstractPizza as Pizza;

class SimplePizzaFactory
{
    public function createPizza($type): Pizza
    {
        $ingredientFactory = new FounderIngredientFactory();

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->name = '起司披薩';
                break;

            case 'pepperoni':
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->name = '義式臘腸披薩';
                break;

            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->name = '蛤蜊披薩';
                break;
        }

        return $pizza;
    }
}