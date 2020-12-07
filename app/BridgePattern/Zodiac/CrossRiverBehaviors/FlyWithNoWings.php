<?php

namespace App\BridgePattern\Zodiac\CrossRiverBehaviors;

use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

class FlyWithNoWings implements CrossRiverBehavior
{
    public function crossRiver()
    {
        echo '壯麗地飛啊飛';
    }
}
