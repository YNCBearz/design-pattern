<?php

namespace App\VisitorPattern\Wedding\Type;

use App\VisitorPattern\Wedding\Contracts\WeddingType;
use App\VisitorPattern\Wedding\Contracts\WeddingRole;

class JapaneseWedding implements WeddingType
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
                    "新郎：繡有家紋的和服\n";
                break;

            case 'Bride':
                echo
                    "新娘：純潔的白無垢\n";
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
                    "新郎：雪駄\n";
                break;

            case 'Bride':
                echo
                    "新娘：草履\n";
                break;
        }
    }
}
