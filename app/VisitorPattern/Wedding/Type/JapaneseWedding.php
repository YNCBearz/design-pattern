<?php

namespace App\VisitorPattern\Wedding\Type;

use App\VisitorPattern\Wedding\Contracts\WeddingType;

class JapaneseWedding implements WeddingType
{
    /**
     * @return string
     */
    public function getBrideGroomClothes()
    {
        return '繡有家紋的和服';
    }

    /**
     * @return string
     */
    public function getBrideClothes()
    {
        return '純潔的白無垢';
    }
}
