<?php

namespace App\SOLID\DIP\PowerSystems;

use App\SOLID\DIP\PowerSystems\ThermalPower;

class Program
{
    public function getPower()
    {
        $thermalPower = new ThermalPower();
        return $thermalPower->generatePower();
    }
}
