<?php
namespace App\DecoratePattern\Coffee;

use App\DecoratePattern\Coffee\Beverage;

class Espresso extends Beverage
{
    public $description = '義式咖啡';

    public function cost(): int
    {
        return 120;
    }
}