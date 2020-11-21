<?php

namespace App\DecoratorPattern\Coffee;

use App\DecoratorPattern\Coffee\Beverage;

class DarkRoast extends Beverage
{
    public $description = '深焙咖啡';

    public function cost(): int
    {
        return 150;
    }
}
