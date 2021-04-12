<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern;

use App\FactoryPattern\Transport\SimpleFactoryPattern\Contracts\Model;
use App\FactoryPattern\Transport\SimpleFactoryPattern\Model\LocalTrain;
use App\FactoryPattern\Transport\SimpleFactoryPattern\Model\LimitedExpress;
use App\FactoryPattern\Transport\SimpleFactoryPattern\Model\SemiExpress;

class RailWayModelFactory
{
    /**
     * @param string $modelName
     * @return Model
     */
    public function createModel($modelName): Model
    {
        switch ($modelName) {
            case 'LocalTrain':
                return new LocalTrain();
                break;

            case 'LimitedExpress':
                return new LimitedExpress();
                break;

            case 'SemiExpress':
                return new SemiExpress();
                break;
        }
    }
}
