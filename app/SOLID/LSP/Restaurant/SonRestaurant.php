<?php

namespace App\SOLID\LSP\Restaurant;

use App\SOLID\LSP\Restaurant\DadRestaurant;
use App\SOLID\LSP\Restaurant\Food\Burger;
use App\SOLID\LSP\Restaurant\Contracts\Eatable;

class SonRestaurant extends DadRestaurant
{
    public function getFood($goldFlow): Eatable
    {
        return new Burger();
    }
}
