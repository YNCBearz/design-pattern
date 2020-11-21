<?php

namespace App\DecoratorPattern\Coffee;

use App\DecoratorPattern\Coffee\Decaf;
use App\DecoratorPattern\Coffee\DarkRoast;
use App\DecoratorPattern\Coffee\Condiment\Mocha;
use App\DecoratorPattern\Coffee\Condiment\SteamedMilk;

class StarbuzzCoffee
{
    public function run()
    {
        $beverage1 = new DarkRoast();
        echo $beverage1->getDescription() . " $" . $beverage1->cost() . "\n";

        $beverage2 = new Decaf();
        echo $beverage2->getDescription() . " $" . $beverage2->cost() . "\n";

        $beverage3 = new Espresso();
        $beverage3 = new SteamedMilk($beverage3);
        $beverage3 = new Mocha($beverage3);
        echo $beverage3->getDescription() . " $" . $beverage3->cost() . "\n";

        echo "------------------\n";
        echo "活動：第二杯蒸奶、摩卡免費添加 \n";
        echo "------------------\n";

        $beverage4 = new Espresso();
        $beverage4 = new SteamedMilk($beverage4);
        $beverage4->setCost(0);
        $beverage4 = new Mocha($beverage4);
        $beverage4->setCost(0);
        echo $beverage4->getDescription() . " $" . $beverage4->cost() . "\n";
    }
}
