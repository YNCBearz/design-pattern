<?php

namespace App\PrototypePattern\Building;

use App\PrototypePattern\Building\Building;
use App\PrototypePattern\Building\Wall;

class Program
{
    /**
     * @return array
     */
    public function run()
    {
        //firstBuilding
        $strawWall = new Wall('straw');
        $firstBuilding = new Building($strawWall, 'oldestPigHouse');

        //secondBuilding
        $secondBuilding = clone $firstBuilding;
        $secondBuilding->name = 'middlePigHouse';
        $secondBuilding->wall->material = 'wood';

        //thirdBuilding
        $thirdBuilding = clone $firstBuilding;
        $thirdBuilding->name = 'youngestPigHouse';
        $thirdBuilding->wall->material = 'bricks';

        return [
            'firstBuilding' => $firstBuilding,
            'secondBuilding' => $secondBuilding,
            'thirdBuilding' => $thirdBuilding
        ];
    }
}
