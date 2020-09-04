<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Model;

interface ModelFactory
{
    public function createModel(): Model;
}
