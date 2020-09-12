<?php

namespace App\FacadePattern\Buffet\Facade;

use App\FacadePattern\Buffet\CoffeeMachine;

class CoffeeMachineFacade
{
    public static function makeLatte()
    {
        $coffeeMachine = new CoffeeMachine();

        return $coffeeMachine
            ->addCoffeeBeans()
            ->grind()
            ->brew()
            ->stirWithMilk();
    }
}
