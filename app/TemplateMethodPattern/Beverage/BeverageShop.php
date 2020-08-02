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
        echo "---------- \n";
        echo "泡茶 （不加檸檬） \n";
        $this->makeTeaWithoutLemon();
        echo "---------- \n";
        echo "泡咖啡 （不加糖） \n";
        $this->makeSugarFreeCoffee();
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

    public function makeTeaWithoutLemon()
    {
        $withLemon = false;
        $tea = new Tea($withLemon);
        $tea->prepareRecipe();
    }

    public function makeSugarFreeCoffee()
    {
        $withSugar = false;
        $coffee = new Coffee($withSugar);
        $coffee->prepareRecipe();
    }
}
