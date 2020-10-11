<?php

namespace App\PrototypePattern\Building;

use App\PrototypePattern\Building\Building;
use App\PrototypePattern\Building\Wall;

class Program
{
    /**
     * @return Building
     */
    public function getFirstBuilding()
    {
        $strawWall = new Wall('straw');
        return new Building($strawWall, 'oldestPigHouse');
    }

    public function getSecondBuilding()
    {
        $firstBuilding = $this->getFirstBuilding();

        $secondBuilding = clone $firstBuilding;
        $secondBuilding->name = 'middlePigHouse';

        $secondBuilding->wall->material = 'wood';

        dump($firstBuilding->name); // oldestPigHouse
        dump($firstBuilding->wall->material); // wood

        dump($secondBuilding->name); // middlePigHouse
        dump($secondBuilding->wall->material); // wood

        return $secondBuilding;
    }
}
