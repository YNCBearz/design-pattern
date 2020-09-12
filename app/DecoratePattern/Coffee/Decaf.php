<?php
namespace App\DecoratePattern\Coffee;

use App\DecoratePattern\Coffee\Beverage;

class Decaf extends Beverage
{
    public $description = '低咖啡因咖啡';

    public function cost(): int
    {
        return 80;
    }
}