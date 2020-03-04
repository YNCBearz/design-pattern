<?php
namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\OriginDuck;

class MallardDuck extends OriginDuck
{
    protected $name = '綠頭鴨';

    public function display()
    {
        echo "外觀是綠頭的 \n";
    }
}