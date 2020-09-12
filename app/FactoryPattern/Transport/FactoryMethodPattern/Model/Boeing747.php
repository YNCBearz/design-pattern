<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern\Model;

use App\FactoryPattern\Transport\FactoryMethodPattern\Contracts\Model;

class Boeing747 implements Model
{
    public function getName()
    {
        return '波音747';
    }
}
