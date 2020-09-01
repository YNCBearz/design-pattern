<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern\Model;

use App\FactoryPattern\Transport\FactoryMethodPattern\Contracts\Model;


class LocalTrain implements Model
{
    public function getName()
    {
        return '區間車';
    }
}
