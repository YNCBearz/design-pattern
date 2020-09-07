<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\ModelFactories;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Model;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\ModelFactory;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Model\LocalTrain;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Chair;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Chair\LongChair;

class LocalTrainFactory implements ModelFactory
{
    public function createModel(): Model
    {
        //取得生產材料...
        //招募技術團隊...
        return new LocalTrain();
    }

    public function createChair(): Chair
    {
        return new LongChair();
    }
}
