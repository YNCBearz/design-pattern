<?php
namespace App\DecoratePattern\Coffee;

use App\DecoratePattern\Coffee\Beverage;

class DarkRoast extends Beverage
{
    public $description = '深焙咖啡';

    public function cost(): int
    {
        return 150;
    }
}