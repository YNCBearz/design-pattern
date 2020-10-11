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

        $secondBuiling = clone $firstBuilding;
        $secondBuiling->name = 'middlePigHouse';

        return $secondBuiling;
    }
}
