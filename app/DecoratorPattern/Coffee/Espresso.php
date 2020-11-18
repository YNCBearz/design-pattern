<?php

namespace App\DecoratorPattern\Coffee;

use App\DecoratorPattern\Coffee\Beverage;

class Espresso extends Beverage
{
    public $description = '義式咖啡';

    public function cost(): int
    {
        return 120;
    }
}
