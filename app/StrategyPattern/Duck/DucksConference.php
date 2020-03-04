<?php
namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Duck\DecoyDuck;
use App\StrategyPattern\Duck\ModelDuck;
use App\StrategyPattern\Duck\RubberDuck;
use App\StrategyPattern\Duck\MallardDuck;
use App\StrategyPattern\Duck\RedHeadDuck;

class DucksConference
{
    /**
     * @return OriginDuck[]
     */
    private function getDucks()
    {
        return [
            new MallardDuck(),
            new RedHeadDuck(),
            new RubberDuck(),
            new DecoyDuck(),
            new ModelDuck(),
        ];
    }

    public function run()
    {
        $ducks = $this->getDucks();

        foreach ($ducks as $duck) {
            $duck->show();
        }
    }
}
