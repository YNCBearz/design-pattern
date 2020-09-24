<?php

namespace App\SOLID\ISP\CoffeeMachine;

use App\SOLID\ISP\CoffeeMachine\Contracts\CoffeeGrinder;
use App\SOLID\ISP\CoffeeMachine\Contracts\CoffeeMaker;
use App\SOLID\ISP\CoffeeMachine\NormalCoffeeGrinder;
use App\SOLID\ISP\CoffeeMachine\MocalPot;

class Program
{
    /**
     * @var CoffeeGrinder
     */
    protected $coffeeGrinder;

    /**
     * @var CoffeeMaker
     */
    protected $coffeeMaker;

    public function getCoffeeByAutomaticCoffeeMachine($coffeeBeans)
    {
        $automaticCoffeeMachine = new AutomaticCoffeeMachine();
        $this->setCoffeeGrinder($automaticCoffeeMachine);
        $this->setCoffeeMaker($automaticCoffeeMachine);

        return $this->getCoffee($coffeeBeans);
    }

    public function getCoffeeByNormalCoffeeGrinderAndMocalPot($coffeeBeans)
    {
        $normalCoffeeGrinder = new NormalCoffeeGrinder();
        $mocalPot = new MocalPot();
        $this->setCoffeeGrinder($normalCoffeeGrinder);
        $this->setCoffeeMaker($mocalPot);

        return $this->getCoffee($coffeeBeans);
    }

    private function grind($coffeeBeans)
    {
        return $this->coffeeGrinder->grind($coffeeBeans);
    }

    private function brew($coffeePowder)
    {
        return $this->coffeeMaker->brew($coffeePowder);
    }

    private function getCoffee($coffeeBeans)
    {
        $coffeePowder = $this->grind($coffeeBeans);
        $coffee = $this->brew($coffeePowder);
        return $coffee;
    }

    private function setCoffeeGrinder(CoffeeGrinder $coffeeGrinder)
    {
        $this->coffeeGrinder = $coffeeGrinder;
    }

    private function setCoffeeMaker(CoffeeMaker $coffeeMaker)
    {
        $this->coffeeMaker = $coffeeMaker;
    }
}
