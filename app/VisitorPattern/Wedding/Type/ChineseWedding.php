<?php

namespace App\VisitorPattern\Wedding\Type;

use App\VisitorPattern\Wedding\Contracts\WeddingType;

class ChineseWedding implements WeddingType
{
    /**
     * @return string
     */
    public function getBrideGroomClothes()
    {
        return '中式囍袍';
    }

    /**
     * @return string
     */
    public function getBrideClothes()
    {
        return '龍鳳褂';
    }
}
