<?php
namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\MallardDuck;
use \App\StrategyPattern\Duck\RedHeadDuck;

class DuckConference
{
    public function run()
    {
        $MallardDuck = new MallardDuck();
        $RedHeadDuck = new RedHeadDuck();

        $MallardDuck->show();
        $RedHeadDuck->show();
    }
}
