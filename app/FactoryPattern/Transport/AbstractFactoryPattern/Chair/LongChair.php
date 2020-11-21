<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Chair;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Chair;

class LongChair implements Chair
{
    public function getName()
    {
        return '長型座椅';
    }
}
