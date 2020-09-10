<?php

namespace App\SOLID\LSP\Restaurant\Food;

use App\SOLID\LSP\Restaurant\Contracts\Eatable;

class FriedRice implements Eatable
{
    public function beEaten()
    {
        return '招牌炒飯被吃了';
    }
}
