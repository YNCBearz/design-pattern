<?php

namespace App\SOLID\ISP\CoffeeMachine;

use App\SOLID\ISP\CoffeeMachine\Contracts\CoffeeGrinder;

class NormalCoffeeGrinder implements CoffeeGrinder
{
    public function grind($coffeeBeans)
    {
        if ($coffeeBeans == '咖啡豆') {
            return '咖啡粉';
        }
    }
}
