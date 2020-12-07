<?php

namespace App\BridgePattern\Zodiac\Contestants;

use App\BridgePattern\Zodiac\CrossRiverBehaviors\RideAtopTheOx;
use App\BridgePattern\Zodiac\Abstracts\Contestant;

class Rat extends Contestant
{
    /**
     * @var RideAtopTheOx
     */
    protected $crossRiverBehavior;

    public function __construct()
    {
        $this->crossRiverBehavior = new RideAtopTheOx();
    }
}
