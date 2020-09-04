<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern;

use App\FactoryPattern\Transport\AbstractFactoryPattern\ModelFactories\LimitedExpressFactory;
use App\FactoryPattern\Transport\AbstractFactoryPattern\ModelFactories\LocalTrainFactory;
use App\FactoryPattern\Transport\AbstractFactoryPattern\ModelFactories\SemiExpressFactory;
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
        $namespace = 'App\FactoryPattern\Transport\AbstractFactoryPattern\ModelFactories';
        $className = $model . 'Factory';

        $reflector = new ReflectionClass($namespace . '\\' . $className);
        return $reflector->newInstance();
    }
}
