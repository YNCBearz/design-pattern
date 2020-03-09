<?php
namespace App\DecoratePattern\Coffee;

use App\DecoratePattern\Coffee\Beverage;

class DarkRoastWithWhippedCream extends Beverage
{
    public $description = '深焙咖啡鮮奶油';

    public function cost(): int
    {
        return 160;
    }
}