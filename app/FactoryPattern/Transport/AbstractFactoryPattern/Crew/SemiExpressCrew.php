<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Crew;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Crew;

class SemiExpressCrew implements Crew
{
    public function getName()
    {
        return '復興號機組人員';
    }
}
