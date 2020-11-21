<?php

namespace App\SOLID\DIP\PowerSystems;

use App\SOLID\DIP\PowerSystems\Contracts\PowerGeneratable;

class WindPower implements PowerGeneratable
{
    public function generatePower()
    {
        return '電力';
    }
}
