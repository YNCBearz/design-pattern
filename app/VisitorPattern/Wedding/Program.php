<?php

namespace App\VisitorPattern\Wedding;

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
     */
    public function getWedding($weddingType)
    {
        $weddingType = $this->createWeddingType($weddingType);

        $brideGroom = new BrideGroom();
        $bride = new Bride();

        $brideGroom->getClothes($weddingType);
        $brideGroom->getShoes($weddingType);

        $bride->getClothes($weddingType);
        $bride->getShoes($weddingType);
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
