<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern\Model;

use App\FactoryPattern\Transport\SimpleFactoryPattern\Contracts\Model;

class SemiExpress implements Model
{
    public function getName()
    {
        return '復興號';
    }
}
