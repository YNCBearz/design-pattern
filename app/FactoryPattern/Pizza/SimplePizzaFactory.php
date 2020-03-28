<?php
namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Pizza\ClamPizza;
use App\FactoryPattern\Pizza\CheesePizza;
use App\FactoryPattern\Pizza\PepperoniPizza;
use App\FactoryPattern\Pizza\Contracts\AbstractPizza as Pizza;

class SimplePizzaFactory
{
    public function createPizza($type): Pizza
    {
        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza();
                break;

            case 'pepperoni':
                $pizza = new PepperoniPizza();
                break;

            case 'clam':
                $pizza = new ClamPizza();
                break;
        }

        return $pizza;
    }
}