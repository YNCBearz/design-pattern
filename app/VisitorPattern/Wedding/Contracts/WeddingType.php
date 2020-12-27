<?php

namespace App\VisitorPattern\Wedding\Contracts;

interface WeddingType
{
    public function getBrideGroomClothes();

    public function getBrideClothes();

    public function getBrideGroomShoes();

    public function getBrideShoes();
}
