<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Crew;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Crew;

class LimitedExpressCrew implements Crew
{
    public function getName()
    {
        return '自強號機組人員';
    }
}
