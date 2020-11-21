<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern\Model;

use App\FactoryPattern\Transport\FactoryMethodPattern\Contracts\Model;


class LimitedExpress implements Model
{
    public function getName()
    {
        return '自強號';
    }
}
