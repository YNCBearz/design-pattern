<?php
namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\OriginDuck;

class DecoyDuck extends OriginDuck
{
    protected $name = '誘餌鴨';

    public function quack()
    {
        //
    }

    public function display()
    {
        echo "外觀是誘餌鴨 \n";
    }

    public function fly()
    {
        //
    }
}