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
                    "新郎：繡有家紋的和服" . PHP_EOL;
                break;

            case 'Bride':
                echo
                    "新娘：純潔的白無垢" . PHP_EOL;
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
                    "新郎：雪駄" . PHP_EOL;
                break;

            case 'Bride':
                echo
                    "新娘：草履" . PHP_EOL;
                break;
        }
    }
}
