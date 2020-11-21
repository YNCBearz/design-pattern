<?php

namespace App\SOLID\ISP\CoffeeMachine\Contracts;

interface AutomaticCoffeeMachineInterface
{
    public function grind($coffeeBeans);

    public function brew($coffeePowder);
}
