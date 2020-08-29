<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern;

use App\FactoryPattern\Transport\FactoryMethodPattern\ModelFactories\LimitedExpressFactory;
use App\FactoryPattern\Transport\FactoryMethodPattern\ModelFactories\LocalTrainFactory;
use App\FactoryPattern\Transport\FactoryMethodPattern\ModelFactories\SemiExpressFactory;

class Program
{
    /**
     * @param string $model
     * @return string
     */
    public function getModel($model)
    {
        $modelFactory = $this->createModelFactory($model);
        $model = $modelFactory->createModel();
        return $model->getName();
    }

    /**
     * @param string $model
     * @return ModelFactory
     */
    private function createModelFactory($model)
    {
        switch ($model) {
            case 'LimitedExpress':
                return new LimitedExpressFactory();
                break;

            case 'LocalTrain':
                return new LocalTrainFactory();
                break;

            case 'SemiExpress':
                return new SemiExpressFactory();
                break;
        }
    }
}
