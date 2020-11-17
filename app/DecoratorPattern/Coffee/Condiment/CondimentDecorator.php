<?php
namespace App\DecoratePattern\Coffee\Condiment;

use App\DecoratePattern\Coffee\Beverage;

abstract class CondimentDecorator extends Beverage
{
    public function getDescription()
    {
        //php無法override已經實作的方法
        throw new \Exception("調味料應該override這個方法");
    }
}