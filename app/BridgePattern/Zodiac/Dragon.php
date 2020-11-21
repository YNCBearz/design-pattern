<?php

namespace App\BridgePattern\Zodiac;

use App\BridgePattern\Zodiac\Contracts\Contestant;
use App\BridgePattern\Zodiac\FlyWithNoWings;
use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

class Dragon implements Contestant
{
    /**
     * @var CrossRiverBehavior
     */
    protected $crossRiverBehavior;

    public function __construct()
    {
        $this->crossRiverBehavior = new FlyWithNoWings();
    }

    public function crossRiver()
    {
        $this->crossRiverBehavior->crossRiver();
    }
}
