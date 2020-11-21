<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern\Model;

use App\FactoryPattern\Transport\FactoryMethodPattern\Contracts\Model;

class SemiExpress implements Model
{
    public function getName()
    {
        return '復興號';
    }
}
