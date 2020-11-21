<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern\ModelFactories;

use App\FactoryPattern\Transport\FactoryMethodPattern\Contracts\Model;
use App\FactoryPattern\Transport\FactoryMethodPattern\Contracts\ModelFactory;
use App\FactoryPattern\Transport\FactoryMethodPattern\Model\LocalTrain;

class LocalTrainFactory implements ModelFactory
{
    public function createModel(): Model
    {
        //取得生產材料...
        //招募技術團隊...
        return new LocalTrain();
    }
}
