<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern\Model;

use App\FactoryPattern\Transport\SimpleFactoryPattern\Contracts\Model;

class LocalTrain implements Model
{
    public function getName()
    {
        return '區間車';
    }
}
