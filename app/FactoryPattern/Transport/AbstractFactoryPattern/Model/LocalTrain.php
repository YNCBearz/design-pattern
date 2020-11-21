<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Model;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Model;


class LocalTrain implements Model
{
    public function getName()
    {
        return '區間車';
    }
}
