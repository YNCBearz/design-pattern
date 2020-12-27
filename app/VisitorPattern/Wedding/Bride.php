<?php

namespace App\VisitorPattern\Wedding;

use App\VisitorPattern\Wedding\Contracts\WeddingRole;
use App\VisitorPattern\Wedding\Contracts\WeddingType;

class Bride implements WeddingRole
{
    /**
     * @var string
     */
    public $name = 'Bride';

    /**
     * @param WeddingType $weddingType
     */
    public function getClothes($weddingType)
    {
        $weddingType->getClothes($this);
    }

    /**
     * @param WeddingType $weddingType
     */
    public function getShoes($weddingType)
    {
        $weddingType->getShoes($this);
    }
}
