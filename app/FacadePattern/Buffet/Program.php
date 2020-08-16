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

    private function makeIceCream()
    {
        return $this->iceCreamMachine
            ->addIngredients()
            ->stir()
            ->chill()
            ->squeeze();
    }

    private function makeLatte()
    {
        return $this->coffeeMachine
            ->addCoffeeBeans()
            ->grind()
            ->brew()
            ->stirWithMilk();
    }

    public function run()
    {
        $order[] = $this->makeIceCream();
        $order[] = $this->makeLatte();

        return $order;
    }
}
