<?php

namespace App\DecoratorPattern\Coffee\Condiment;

use App\DecoratorPattern\Coffee\Beverage;
use App\DecoratorPattern\Coffee\Condiment\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    public $condiment = '摩卡';
    public $beverage;
    public $cost = 10;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . $this->condiment;
    }

    public function cost(): int
    {
        return $this->beverage->cost() + $this->cost;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }
}
