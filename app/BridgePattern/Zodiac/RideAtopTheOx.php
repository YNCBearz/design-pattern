<?php

namespace App\BridgePattern\Zodiac;

use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

class RideAtopTheOx implements CrossRiverBehavior
{
    public function crossRiver()
    {
        $this->rideAtopTheOx();
    }

    private function rideAtopTheOx()
    {
        echo '悠哉地站啊站';
    }
}