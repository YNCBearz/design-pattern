<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Model;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Model;


class LimitedExpress implements Model
{
    public function getName()
    {
        return '自強號';
    }
}
