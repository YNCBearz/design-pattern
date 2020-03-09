<?php
namespace App\DecoratePattern\Coffee;

use App\DecoratePattern\Coffee\Beverage;

class HouseBlend extends Beverage
{
    public $description = '綜合咖啡';

    public function cost(): int
    {
        return 100;
    }
}