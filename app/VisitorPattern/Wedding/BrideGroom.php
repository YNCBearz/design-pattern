<?php

namespace App\VisitorPattern\Wedding;

use App\VisitorPattern\Wedding\Contracts\WeddingRole;

class BrideGroom implements WeddingRole
{
    /**
     * @param string $weddingType
     */
    public function getClothes($weddingType)
    {
        switch ($weddingType) {
            case 'Chinese':
                echo
                    "新郎：中式囍袍\n";
                break;

            case 'Japanese':
                echo
                    "新郎：繡有家紋的和服\n";
                break;
        }
    }

    /**
     * @param string $weddingType
     */
    public function getShoes($weddingType)
    {
        switch ($weddingType) {
            case 'Chinese':
                echo
                    "新郎：黑色秀禾鞋\n";
                break;

            case 'Japanese':
                echo
                    "新郎：雪駄\n";
                break;
        }
    }
}
