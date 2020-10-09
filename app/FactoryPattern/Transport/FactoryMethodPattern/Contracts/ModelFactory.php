<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern\Contracts;

use App\FactoryPattern\Transport\FactoryMethodPattern\Contracts\Model;

interface ModelFactory
{
    public function createModel(): Model;
}
