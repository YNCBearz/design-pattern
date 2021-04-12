<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern;

use App\FactoryPattern\Transport\SimpleFactoryPattern\RailwayModelFactory;

class Program
{
    /**
     * @param string $modelName
     * @return string
     */
    public function getModel($modelName)
    {
        $railwayModelFactory = new RailwayModelFactory();
        $model = $railwayModelFactory->createModel($modelName);
        return $model->getName();
    }
}
