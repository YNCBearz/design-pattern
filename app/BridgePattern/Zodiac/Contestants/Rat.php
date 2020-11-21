<?php

namespace App\BridgePattern\Zodiac\Contestants;

use App\BridgePattern\Zodiac\Contracts\Contestant;
use App\BridgePattern\Zodiac\CrossRiverBehaviors\RideAtopTheOx;
use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

class Rat implements Contestant
{
    /**
     * @var CrossRiverBehavior
     */
    protected $crossRiverBehavior;

    public function __construct()
    {
        $this->crossRiverBehavior = new RideAtopTheOx();
    }

    public function crossRiver()
    {
        $this->crossRiverBehavior->crossRiver();
    }
}
