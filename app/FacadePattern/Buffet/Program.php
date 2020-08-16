<?php

namespace App\FacadePattern\Buffet;

use App\FacadePattern\Buffet\Facade\CoffeeMachineFacade;
use App\FacadePattern\Buffet\Facade\IceCreamMachineFacade;

class Program
{
    public function makeIceCream()
    {
        return IceCreamMachineFacade::makeIceCream();
    }

    public function makeLatte()
    {
        return CoffeeMachineFacade::makeLatte();
    }
}
