<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\ModelFactory;
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
     * @return string
     */
    public function getChair($model)
    {
        $modelFactory = $this->createModelFactory($model);
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
