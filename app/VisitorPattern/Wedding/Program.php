<?php

namespace App\VisitorPattern\Wedding;

use App\VisitorPattern\Wedding\Contracts\WeddingType;
use App\VisitorPattern\Wedding\WeddingTypeFactory;
use App\VisitorPattern\Wedding\Composite;
use App\VisitorPattern\Wedding\BrideGroom;
use App\VisitorPattern\Wedding\Bride;

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

        $composite = new Composite();

        $brideGroom = new BrideGroom();
        $bride = new Bride();

        $composite->add($brideGroom);
        $composite->add($bride);

        $composite->display($weddingType);
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
