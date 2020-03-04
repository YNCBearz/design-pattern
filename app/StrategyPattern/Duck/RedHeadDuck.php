<?php

namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\OriginDuck;

class RedHeadDuck extends OriginDuck
{
    protected $name = '紅頭鴨';

    public function display()
    {
        echo "外觀是紅頭的 \n";
    }
}
