<?php

namespace App\TemplateMethodPattern\Beverage;

use App\TemplateMethodPattern\Beverage\CaffeineBeverage;

class Coffee extends CaffeineBeverage
{
    protected function brew()
    {
        echo "用沸水沖泡咖啡 \n";
    }

    protected function addCondiments()
    {
        echo "加糖及牛奶 \n";
    }
}
