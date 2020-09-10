<?php

namespace App\SOLID\LSP\Restaurant\Food;

use App\SOLID\LSP\Restaurant\Contracts\Eatable;

class Steak implements Eatable
{
    public function beEaten()
    {
        return '招牌牛排被吃了';
    }
}
