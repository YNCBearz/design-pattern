<?php

namespace App\FacadePattern\Buffet\Facade;

use App\FacadePattern\Buffet\IceCreamMachine;

class IceCreamMachineFacade
{
    public static function makeIceCream()
    {
        $iceCreamMachine = new IceCreamMachine();

        return $iceCreamMachine
            ->addIngredients()
            ->stir()
            ->chill()
            ->squeeze();
    }
}
