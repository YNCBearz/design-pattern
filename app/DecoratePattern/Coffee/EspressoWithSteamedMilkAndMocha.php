<?php
namespace App\DecoratePattern\Coffee;

use App\DecoratePattern\Coffee\Beverage;

class EspressoWithSteamedMilkAndMocha extends Beverage
{
    public $description = '義式咖啡蒸奶摩卡';

    public function cost(): int
    {
        return 140;
    }
}