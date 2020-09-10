<?php

namespace App\SOLID\LSP\Restaurant;

use App\SOLID\LSP\Restaurant\Contracts\Eatable;
use App\SOLID\LSP\Restaurant\Food\Burger;
use App\SOLID\LSP\Restaurant\Food\FriedRice;
use App\SOLID\LSP\Restaurant\Food\Steak;

class DadRestaurant
{
    public function getFood($money): Eatable
    {
        $randomNumber = rand(1, 3);

        switch ($randomNumber) {
            case 1:
                return new Burger();
                break;

            case 2:
                return new FriedRice();
                break;

            case 3:
                return new Steak();
                break;
        }
    }
}
