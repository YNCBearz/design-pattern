<?php

namespace App\BridgePattern\Zodiac;

use App\BridgePattern\Zodiac\Contracts\Contestant;
use App\BridgePattern\Zodiac\RideAtopTheOx;

class Rat implements Contestant
{
    public function __construct()
    {
        $this->crossRiverBehavior = new RideAtopTheOx();
    }

    public function crossRiver()
    {
        $this->crossRiverBehavior->crossRiver();
    }
}
