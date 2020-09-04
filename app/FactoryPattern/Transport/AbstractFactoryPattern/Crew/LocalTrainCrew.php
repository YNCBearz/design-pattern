<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Crew;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Crew;

class LocalTrainCrew implements Crew
{
    public function getName()
    {
        return '區間車機組人員';
    }
}
