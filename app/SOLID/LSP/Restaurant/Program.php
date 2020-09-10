<?php

namespace App\SOLID\LSP\Restaurant;

class Program
{
    public function useMoneyInDadRestaurantToGetFood($money)
    {
        $restaurant = new DadRestaurant();
        return $restaurant->getFood($money);
    }

    public function useMoneyInSonRestaurantToGetFood($goldFlow)
    {
        $restaurant = new SonRestaurant();
        return $restaurant->getFood($goldFlow);
    }
}
