<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern;

use App\FactoryPattern\Transport\SimpleFactoryPattern\RailwayModelFactory;

class Program
{
    /**
     * @param string $model
     * @return string
     */
    public function getModel($model)
    {
        $railwayModelFactory = new RailwayModelFactory();
        $model = $railwayModelFactory->createModel($model);
        return $model->getName();
    }
}
