<?php

namespace App\SOLID\LSP\Restaurant\Food;

use App\SOLID\LSP\Restaurant\Contracts\Eatable;

class Burger implements Eatable
{
    public function beEaten()
    {
        return '招牌漢堡被吃了';
    }
}
