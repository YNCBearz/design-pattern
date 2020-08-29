<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern;

use App\FactoryPattern\Transport\SimpleFactoryPattern\RailWayPaymentFactory;

class Program
{
    /**
     * @param string $model
     * @return string
     */
    public function getModel($model)
    {
        return '自強號';
    }
}
