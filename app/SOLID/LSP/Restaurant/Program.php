<?php

namespace App\SOLID\LSP\Restaurant;

class Program
{
    public function getFoodInDadRestaurant($money)
    {
        $restaurant = new DadRestaurant();
        return $restaurant->getFood($money);
    }

    public function getFoodInSonRestaurant($goldFlow)
    {
        $restaurant = new SonRestaurant();
        return $restaurant->getFood($goldFlow);
    }
}
