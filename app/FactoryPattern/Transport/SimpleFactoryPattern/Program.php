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
        switch ($model) {
            case 'LocalTrain':
                return '區間車';
                break;

            case 'LimitedExpress':
                return '自強號';
                break;
        }
    }
}
