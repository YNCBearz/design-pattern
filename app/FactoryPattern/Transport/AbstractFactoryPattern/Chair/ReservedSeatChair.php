<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Chair;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Chair;

class ReservedSeatChair implements Chair
{
    public function getName()
    {
        return '對號座椅';
    }
}
