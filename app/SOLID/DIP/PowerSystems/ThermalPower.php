<?php

namespace App\SOLID\DIP\PowerSystems;

use App\SOLID\DIP\PowerSystems\Contracts\PowerGeneratable;

class ThermalPower implements PowerGeneratable
{
    protected $name = '火力發電';

    public function generatePower()
    {
        return '電力';
    }
}
