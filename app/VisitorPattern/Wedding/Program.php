<?php

namespace App\VisitorPattern\Wedding;

use App\VisitorPattern\Wedding\Contracts\WeddingType;
use App\VisitorPattern\Wedding\WeddingTypeFactory;
use App\VisitorPattern\Wedding\BrideGroom;

class Program
{
    /**
     * @var WeddingTypeFactory
     */
    protected $weddingTypeFactory;

    public function __construct()
    {
        $this->weddingTypeFactory = new WeddingTypeFactory();
    }

    /**
     * @param string $weddingType
     * @return string
     */
    public function getBrideGroomClothes($weddingType)
    {
        $weddingType = $this->createWeddingType($weddingType);

        $brideGroom = new BrideGroom();
        return $brideGroom->getClothes($weddingType);
    }

    /**
     * @param string $weddingType
     * @return string
     */
    public function getBrideClothes($weddingType)
    {
        $weddingType = $this->createWeddingType($weddingType);

        $bride = new Bride();
        return $bride->getClothes($weddingType);
    }

    /**
     * @param string $weddingType
     * @return WeddingType
     */
    private function createWeddingType($weddingType)
    {
        return $this->weddingTypeFactory->create($weddingType);
    }
}
