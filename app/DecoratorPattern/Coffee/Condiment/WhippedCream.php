<?php

namespace App\DecoratePattern\Coffee\Condiment;

use App\DecoratePattern\Coffee\Beverage;
use App\DecoratePattern\Coffee\Condiment\CondimentDecorator;

class WhippedCream extends CondimentDecorator
{
    public $condiment = '鮮奶油';
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
