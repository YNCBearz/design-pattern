<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern;

use App\FactoryPattern\Transport\FactoryMethodPattern\Contracts\ModelFactory;
use ReflectionClass;

class Program
{
    /**
     * @param string $modelName
     * @return string
     */
    public function getModel($modelName)
    {
        $modelFactory = $this->createModelFactory($modelName);
        $model = $modelFactory->createModel();
        return $model->getName();
    }

    /**
     * @param string $model
     * @return ModelFactory
     */
    private function createModelFactory($modelName)
    {
        $namespace = 'App\FactoryPattern\Transport\FactoryMethodPattern\ModelFactories';
        $className = $modelName . 'Factory';

        $reflector = new ReflectionClass($namespace . '\\' . $className);
        return $reflector->newInstance();
    }
}
