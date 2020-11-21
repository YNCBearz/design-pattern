<?php

namespace App\BridgePattern\Zodiac\Abstracts;

use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

abstract class Contestant
{
    /**
     * @var CrossRiverBehavior
     */
    protected $crossRiverBehavior;

    public function crossRiver()
    {
        $this->crossRiverBehavior->crossRiver();
    }
}
