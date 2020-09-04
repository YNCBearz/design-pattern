<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Crew;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Crew;

class Boeing747Crew implements Crew
{
    public function getName()
    {
        return '波音747機組人員';
    }
}
