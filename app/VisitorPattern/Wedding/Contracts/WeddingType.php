<?php

namespace App\VisitorPattern\Wedding\Contracts;

interface WeddingType
{
    /**
     * @param WeddingRole $role
     */
    public function getClothes($role);

    /**
     * @param WeddingRole $role
     */
    public function getShoes($role);
}
