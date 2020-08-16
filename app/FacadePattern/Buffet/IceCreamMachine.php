<?php

namespace App\FacadePattern\Buffet;

class IceCreamMachine
{
    public function addIngredients()
    {
        //倒入牛奶、糖、鮮奶油、蛋黃等
        return $this;
    }

    public function stir()
    {
        //攪拌均勻
        return $this;
    }

    public function chill()
    {
        //使其冷藏
        return $this;
    }

    public function squeeze()
    {
        //擠出霜淇淋
        return '霜淇淋';
    }
}
