<?php

namespace App\TemplateMethodPattern\CaffeineBeverage;

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
        echo "把水煮沸 \n";
        echo "用沸水浸泡茶葉 \n";
        echo "倒進杯子中 \n";
        echo "加檸檬 \n";
    }

    public function makeCoffee()
    {
        echo "把水煮沸 \n";
        echo "用沸水沖泡咖啡 \n";
        echo "倒進杯子中 \n";
        echo "加糖及牛奶 \n";
    }
}
