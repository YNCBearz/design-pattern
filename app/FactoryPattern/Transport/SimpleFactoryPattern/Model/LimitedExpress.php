<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern\Model;

use App\FactoryPattern\Transport\SimpleFactoryPattern\Contracts\Model;

class LimitedExpress implements Model
{
    public function getName()
    {
        return '自強號';
    }
}
