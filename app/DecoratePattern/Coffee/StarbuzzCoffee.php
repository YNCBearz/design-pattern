<?php
namespace App\DecoratePattern\Coffee;

use App\DecoratePattern\Coffee\Decaf;
use App\DecoratePattern\Coffee\DarkRoast;
use App\DecoratePattern\Coffee\EspressoWithSteamedMilkAndMocha;

class StarbuzzCoffee
{
    public function run()
    {
        $beverage1 = new DarkRoast();
        echo $beverage1->getDescription() . " $" . $beverage1->cost() . "\n";

        $beverage2 = new Decaf();
        echo $beverage2->getDescription() . " $" . $beverage2->cost() . "\n";

        $beverage3 = new EspressoWithSteamedMilkAndMocha();
        echo $beverage3->getDescription() . " $" . $beverage3->cost() . "\n";

    }
}