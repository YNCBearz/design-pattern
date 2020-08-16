<?php

namespace App\FacadePattern\Buffet;

class CoffeeMachine
{
    public function addCoffeeBeans()
    {
        //放入咖啡豆
        return $this;
    }

    public function grind()
    {
        //研磨咖啡豆
        return $this;
    }

    public function brew()
    {
        //沖煮咖啡
        return $this;
    }

    public function stirWithMilk()
    {
        //與牛奶攪拌
        return '拿鐵';
    }
}
