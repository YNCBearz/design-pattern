<?php

namespace App\VisitorPattern\Wedding;

use App\VisitorPattern\Wedding\Contracts\WeddingType;

class Bride
{
    public function getClothes(WeddingType $weddingType)
    {
        return $weddingType->getBrideClothes();
    }
}
