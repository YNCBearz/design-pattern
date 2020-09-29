<?php

namespace App\SOLID\LSP\Restaurant\Food;

use App\SOLID\LSP\Restaurant\Contracts\Eatable;

class FriedChicken implements Eatable
{
    public function beEaten()
    {
        return '招牌炸雞被吃了';
    }
}
