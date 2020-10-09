<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Model;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Model;

class SemiExpress implements Model
{
    public function getName()
    {
        return '復興號';
    }
}
