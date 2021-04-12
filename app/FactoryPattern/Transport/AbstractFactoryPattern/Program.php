<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\ModelFactory;
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
     * @param string $modelName
     * @return string
     */
    public function getChair($modelName)
    {
        $modelFactory = $this->createModelFactory($modelName);
        $chair = $modelFactory->createChair();
        return $chair->getName();
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
