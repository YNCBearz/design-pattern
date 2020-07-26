<?php

namespace App\CommandPattern\WesternRestaurant;

use App\CommandPattern\WesternRestaurant\Receiver\ChefA;
use App\CommandPattern\WesternRestaurant\Receiver\ChefB;

class Program
{
    /**
     * @param array $order
     * @return array
     */
    public function makeOrder($order)
    {
        $chefA = new ChefA();
        $chefB = new ChefB();
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
