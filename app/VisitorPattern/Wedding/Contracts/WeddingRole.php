<?php

namespace App\VisitorPattern\Wedding\Contracts;

use App\VisitorPattern\Wedding\Contracts\WeddingType;

interface WeddingRole
{
    /**
     * @param WeddingType $weddingType
     */
    public function getClothes($weddingType);

    /**
     * @param WeddingType $weddingType
     */
    public function getShoes($weddingType);
}
