<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Model;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Chair;

interface ModelFactory
{
    public function createModel(): Model;

    public function createChair(): Chair;
}
