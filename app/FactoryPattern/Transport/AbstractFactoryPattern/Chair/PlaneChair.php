<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Chair;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Chair;

class PlaneChair implements Chair
{
    public function getName()
    {
        return '飛機座椅';
    }
}
