<?php

namespace App\FactoryPattern\Transport\AbstractFactoryPattern\Model;

use App\FactoryPattern\Transport\AbstractFactoryPattern\Contracts\Model;

class Boeing747 implements Model
{
    public function getName()
    {
        return '波音747';
    }
}
