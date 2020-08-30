<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern\ModelFactories;

use App\FactoryPattern\Transport\FactoryMethodPattern\Contracts\ModelFactory;
use App\FactoryPattern\Transport\FactoryMethodPattern\Contracts\Model;
use App\FactoryPattern\Transport\FactoryMethodPattern\Model\Boeing747;

class Boeing747Factory implements ModelFactory
{
    public function createModel(): Model
    {
        return new Boeing747();
    }
}
