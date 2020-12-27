<?php

namespace App\VisitorPattern\Wedding;

use App\VisitorPattern\Wedding\Contracts\WeddingType;

class BrideGroom
{
    public function getClothes(WeddingType $weddingType)
    {
        return $weddingType->getBrideGroomClothes();
    }
}
