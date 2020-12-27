<?php

namespace App\VisitorPattern\Wedding;

use App\VisitorPattern\Wedding\Contracts\WeddingRole;

class Bride implements WeddingRole
{
    /**
     * @param string $weddingType
     */
    public function getClothes($weddingType)
    {
        switch ($weddingType) {
            case 'Chinese':
                echo
                    "新娘：龍鳳褂\n";
                break;

            case 'Japanese':
                echo
                    "新娘：純潔的白無垢\n";
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
                    "新娘：紅色秀禾鞋\n";
                break;

            case 'Japanese':
                echo
                    "新娘：草履\n";
                break;
        }
    }
}
