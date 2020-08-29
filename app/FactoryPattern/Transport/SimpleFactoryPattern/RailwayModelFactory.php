<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern;

use App\FactoryPattern\Transport\SimpleFactoryPattern\Contracts\Model;
use App\FactoryPattern\Transport\SimpleFactoryPattern\Model\LocalTrain;
use App\FactoryPattern\Transport\SimpleFactoryPattern\Model\LimitedExpress;

class RailWayModelFactory
{
    /**
     * @param string $model
     * @return Model
     */
    public function createModel($model): Model
    {
        switch ($model) {
            case 'LocalTrain':
                return new LocalTrain();
                break;

            case 'LimitedExpress':
                return new LimitedExpress();
                break;
        }
    }
}
