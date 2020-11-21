<?php

namespace App\SOLID\ISP\CoffeeMachine\Contracts;

interface CoffeeGrinder
{
    public function grind($coffeeBeans);
}
