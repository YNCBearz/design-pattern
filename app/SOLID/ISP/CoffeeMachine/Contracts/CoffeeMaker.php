<?php

namespace App\SOLID\ISP\CoffeeMachine\Contracts;

interface CoffeeMaker
{
    public function brew($coffeePowder);
}
