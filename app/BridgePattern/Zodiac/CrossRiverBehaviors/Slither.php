<?php

namespace App\BridgePattern\Zodiac\CrossRiverBehaviors;

use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

class Slither implements CrossRiverBehavior
{
    public function crossRiver()
    {
        echo '迅速地滑啊滑';
    }
}
