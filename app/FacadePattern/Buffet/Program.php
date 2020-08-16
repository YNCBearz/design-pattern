<?php

namespace App\FacadePattern\Buffet;

use App\FacadePattern\Buffet\IceCreamMachine;
use App\FacadePattern\Buffet\CoffeeMachine;

class Program
{
    /**
     * @var iceCreamMachine
     */
    protected $iceCreamMachine;

    /**
     * @var CoffeeMachine
     */
    protected $coffeeMachine;

    public function __construct()
    {
        $this->iceCreamMachine = new IceCreamMachine();
        $this->coffeeMachine = new CoffeeMachine();
    }

    public function makeIceCream()
    {
        return $this->iceCreamMachine
            ->addIngredients()
            ->stir()
            ->chill()
            ->squeeze();
    }

    public function makeLatte()
    {
        return $this->coffeeMachine
            ->addCoffeeBeans()
            ->grind()
            ->brew()
            ->stirWithMilk();
    }
}
