<?php

namespace App\TemplateMethodPattern\Beverage;

use App\TemplateMethodPattern\Beverage\CaffeineBeverage;

class Tea extends CaffeineBeverage
{
    protected function brew()
    {
        echo "用沸水浸泡茶葉 \n";
    }

    protected function addCondiments()
    {
        echo "加檸檬 \n";
    }
}
