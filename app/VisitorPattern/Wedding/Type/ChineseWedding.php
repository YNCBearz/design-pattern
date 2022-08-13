<?php

namespace App\VisitorPattern\Wedding\Type;

use App\VisitorPattern\Wedding\Contracts\WeddingType;
use App\VisitorPattern\Wedding\Contracts\WeddingRole;

class ChineseWedding implements WeddingType
{
    /**
     * @param WeddingRole $role
     */
    public function getClothes($role)
    {
        $roleName = $role->name;

        switch ($roleName) {
            case 'BrideGroom':
                echo
                    "新郎：中式囍袍" . PHP_EOL;
                break;

            case 'Bride':
                echo
                    "新娘：龍鳳褂" . PHP_EOL;
                break;
        }
    }

    /**
     * @param WeddingRole $role
     */
    public function getShoes($role)
    {
        $roleName = $role->name;

        switch ($roleName) {
            case 'BrideGroom':
                echo
                    "新郎：黑色秀禾鞋" . PHP_EOL;
                break;

            case 'Bride':
                echo
                    "新娘：紅色秀禾鞋" . PHP_EOL;
                break;
        }
    }
}
