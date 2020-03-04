<?php

namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\OriginDuck;

class RubberDuck extends OriginDuck
{
    protected $name = '橡皮鴨';

    public function display()
    {
        echo "外觀是橡皮的 \n";
    }
}
