<?php

namespace App\SOLID\ISP\CoffeeMachine;

use App\SOLID\ISP\CoffeeMachine\Contracts\CoffeeMaker;

class Mocalpot implements CoffeeMaker
{
    public function brew($coffeePowder)
    {
        if ($coffeePowder == '咖啡粉') {
            return '咖啡';
        }
    }
}
