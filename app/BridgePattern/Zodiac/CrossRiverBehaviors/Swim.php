<?php

namespace App\BridgePattern\Zodiac\CrossRiverBehaviors;

use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

class Swim implements CrossRiverBehavior
{
    public function crossRiver()
    {
        echo '努力地游啊游';
    }
}
