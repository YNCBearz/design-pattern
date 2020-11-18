<?php

namespace App\DecoratorPattern\Coffee;

use App\DecoratorPattern\Coffee\Beverage;

class Decaf extends Beverage
{
    public $description = '低咖啡因咖啡';

    public function cost(): int
    {
        return 80;
    }
}
