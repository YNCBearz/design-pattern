<?php

namespace App\BridgePattern\Zodiac;

use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

class Slither implements CrossRiverBehavior
{
    public function crossRiver()
    {
        $this->slither();
    }

    private function slither()
    {
        echo '迅速地滑啊滑';
    }
}
