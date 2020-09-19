<?php

namespace App\SOLID\ISP\CoffeeMachine;

use App\SOLID\ISP\CoffeeMachine\Contracts\CoffeeGrinder;
use App\SOLID\ISP\CoffeeMachine\Contracts\CoffeeMaker;

class AutomaticCoffeeMachine implements CoffeeGrinder, CoffeeMaker
{
    public function grind($coffeeBeans)
    {
        if ($coffeeBeans == '咖啡豆') {
            return '咖啡粉';
        }
    }

    public function brew($coffeePowder)
    {
        if ($coffeePowder == '咖啡粉') {
            return '咖啡';
        }
    }
}
