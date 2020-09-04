<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\ModelFactories;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\ModelFactory;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Model;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Model\Boeing747;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Crew;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Crew\Boeing747Crew;

class Boeing747Factory implements ModelFactory
{
    public function createModel(): Model
    {
        //取得生產材料...
        //招募技術團隊..
        return new Boeing747();
    }

    public function createCrew(): Crew
    {
        return new Boeing747Crew();
    }
}
