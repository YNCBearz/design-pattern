<?php
namespace App\FactoryPattern\Pizza\NewYork;

use App\FactoryPattern\Pizza\Contracts\AbstractPizza as Pizza;

class NYStylePizzaFactory
{
    public function createPizza($type): Pizza
    {
        switch ($type) {
            case 'cheese':
                $pizza = new NYStyleCheesePizza();
                break;

            case 'clam':
                $pizza = new NYStyleClamPizza();
                break;
        }

        return $pizza;
    }
}