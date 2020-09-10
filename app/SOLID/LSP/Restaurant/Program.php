<?php

namespace App\SOLID\LSP\Restaurant;

class Program
{
    public function useMoneyToGetFood($money)
    {
        $restaurant = new DadRestaurant();
        return $restaurant->getFood($money);
    }
}
