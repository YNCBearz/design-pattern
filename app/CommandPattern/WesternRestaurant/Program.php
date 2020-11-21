<?php

namespace App\CommandPattern\WesternRestaurant;

use App\CommandPattern\WesternRestaurant\Receiver\RobotChefA;
use App\CommandPattern\WesternRestaurant\Receiver\RobotChefB;

class Program
{
    /**
     * @param array $order
     * @return array
     */
    public function makeOrder($order)
    {
        $chefA = new RobotChefA();
        $chefB = new RobotChefB();
        $cookFiletMignonCommand = new cookFiletMignonCommand($chefA);
        $cookSirloinSteakCommand = new CookSirloinSteakCommand($chefB);

        $result = [];
        if (in_array('Filet Mignon', $order)) {
            $result[] = $cookFiletMignonCommand->execute();
        }

        if (in_array('Sirloin Steak', $order)) {
            $result[] = $cookSirloinSteakCommand->execute();
        }

        return $result;
    }
}
