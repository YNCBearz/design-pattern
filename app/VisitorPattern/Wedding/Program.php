<?php

namespace App\VisitorPattern\Wedding;

class Program
{
    /**
     * @param string $weddingType
     */
    public function getWedding($weddingType)
    {
        $brideGroom = new BrideGroom();
        $bride = new Bride();

        $brideGroom->getClothes($weddingType);
        $brideGroom->getShoes($weddingType);

        $bride->getClothes($weddingType);
        $bride->getShoes($weddingType);
    }
}
