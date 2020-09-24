<?php

namespace App\SOLID\LSP\Restaurant\Food;

use App\SOLID\LSP\Restaurant\Contracts\Eatable;

class ChickenNuggets implements Eatable
{
    public function beEaten()
    {
        return '招牌雞塊被吃了';
    }
}
