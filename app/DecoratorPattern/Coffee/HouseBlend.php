<?php

namespace App\DecoratorPattern\Coffee;

use App\DecoratorPattern\Coffee\Beverage;

class HouseBlend extends Beverage
{
    public $description = '綜合咖啡';

    public function cost(): int
    {
        return 100;
    }
}
