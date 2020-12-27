<?php

namespace App\VisitorPattern\Wedding\Type;

use App\VisitorPattern\Wedding\Contracts\WeddingType;
use App\VisitorPattern\Wedding\Contracts\WeddingRole;
use ReflectionClass;

class ChineseWedding implements WeddingType
{
    /**
     * @param WeddingRole $role
     */
    public function getClothes($role)
    {
        $reflectionClass = new ReflectionClass($role);
        $roleName = $reflectionClass->getShortName();;

        switch ($roleName) {
            case 'BrideGroom':
                echo
                    "新郎：中式囍袍\n";
                break;

            case 'Bride':
                echo
                    "新娘：龍鳳褂\n";
                break;
        }
    }

    /**
     * @param WeddingRole $role
     */
    public function getShoes($role)
    {
        $reflectionClass = new ReflectionClass($role);
        $roleName = $reflectionClass->getShortName();;

        switch ($roleName) {
            case 'BrideGroom':
                echo
                    "新郎：黑色秀禾鞋\n";
                break;

            case 'Bride':
                echo
                    "新娘：紅色秀禾鞋\n";
                break;
        }
    }
}
