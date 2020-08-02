<?php

namespace App\TemplateMethodPattern\Beverage;

use App\TemplateMethodPattern\Beverage\Tea;
use App\TemplateMethodPattern\Beverage\Coffee;

class BeverageShop
{
    public function run()
    {
        echo "泡茶 \n";
        $this->makeTea();
        echo "---------- \n";
        echo "泡咖啡 \n";
        $this->makeCoffee();
    }

    public function makeTea()
    {
        $tea = new Tea();
        $tea->prepareRecipe();
    }

    public function makeCoffee()
    {
        $coffee = new Coffee();
        $coffee->prepareRecipe();
    }
}
