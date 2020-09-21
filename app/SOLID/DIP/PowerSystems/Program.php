<?php

namespace App\SOLID\DIP\PowerSystems;

use App\SOLID\DIP\PowerSystems\Contracts\PowerGeneratable;

class Program
{
    public function getPower(PowerGeneratable $powerGeneration)
    {
        return $powerGeneration->generatePower();
    }
}
