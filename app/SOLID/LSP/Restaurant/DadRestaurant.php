<?php

namespace App\SOLID\LSP\Restaurant;

use App\SOLID\LSP\Restaurant\Contracts\Eatable;
use App\SOLID\LSP\Restaurant\Food\Burger;
use Exception;
use App\SOLID\LSP\Restaurant\Food\ChickenNuggets;
use App\SOLID\LSP\Restaurant\Food\FriedChicken;

class DadRestaurant
{
    public function getFood($money): Eatable
    {
        if (!is_int($money)) {
            throw new Exception('我們只收現金');
        }

        $randomNumber = rand(1, 3);

        switch ($randomNumber) {
            case 1:
                return new Burger();
                break;

            case 2:
                return new FriedChicken();
                break;

            case 3:
                return new ChickenNuggets();
                break;
        }
    }
}
