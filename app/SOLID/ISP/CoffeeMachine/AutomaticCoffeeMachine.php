<?php

namespace App\SOLID\ISP\CoffeeMachine;

use App\SOLID\ISP\CoffeeMachine\Contracts\AutomaticCoffeeMachineInterface;

class AutomaticCoffeeMachine implements AutomaticCoffeeMachineInterface
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
