<?php

namespace App\FacadePattern\ConvenienceStore;

use App\FacadePattern\ConvenienceStore\IceCreamMachine;
use App\FacadePattern\ConvenienceStore\CoffeeMachine;

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
