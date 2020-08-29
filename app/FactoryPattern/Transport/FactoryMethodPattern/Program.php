<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern;

use App\FactoryPattern\Transport\FactoryMethodPattern\ModelFactories\LimitedExpressFactory;
use App\FactoryPattern\Transport\FactoryMethodPattern\ModelFactories\LocalTrainFactory;
use App\FactoryPattern\Transport\FactoryMethodPattern\ModelFactories\SemiExpressFactory;
use ReflectionClass;

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
        $namespace = 'App\FactoryPattern\Transport\FactoryMethodPattern\ModelFactories';
        $className = $model . 'Factory';

        $reflector = new ReflectionClass($namespace . '\\' . $className);
        return $reflector->newInstance();
    }
}
