<?php

namespace App\BridgePattern\Zodiac\CrossRiverBehaviors;

use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

class RideAtopTheOx implements CrossRiverBehavior
{
    public function crossRiver()
    {
        echo '悠哉地站啊站';
    }
}
