<?php

namespace App\SOLID\ISP\CoffeeMachine;

class Program
{
    protected $coffeeGrinder;

    protected $coffeeMaker;

    public function getCoffeeByAutomaticCoffeeMachine($coffeeBeans)
    {
        $automaticCoffeeMachine = new AutomaticCoffeeMachine();
        $this->coffeeGrinder = $automaticCoffeeMachine;
        $this->coffeeMaker = $automaticCoffeeMachine;

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
}
