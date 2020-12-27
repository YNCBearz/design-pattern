<?php

namespace App\VisitorPattern\Wedding\Contracts;

interface WeddingRole
{
    /**
     * @param string $weddingType
     */
    public function getClothes($weddingType);

    /**
     * @param string $weddingType
     */
    public function getShoes($weddingType);
}
