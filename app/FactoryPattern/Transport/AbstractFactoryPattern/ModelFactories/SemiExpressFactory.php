<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\ModelFactories;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Model;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\ModelFactory;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Model\SemiExpress;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Chair;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Chair\ReservedSeatChair;

class SemiExpressFactory implements ModelFactory
{
    public function createModel(): Model
    {
        //取得生產材料...
        //招募技術團隊...
        return new SemiExpress();
    }

    public function createChair(): Chair
    {
        return new ReservedSeatChair();
    }
}
