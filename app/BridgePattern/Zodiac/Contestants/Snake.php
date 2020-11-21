<?php

namespace App\BridgePattern\Zodiac\Contestants;

use App\BridgePattern\Zodiac\Contracts\Contestant;
use App\BridgePattern\Zodiac\Slither;
use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

class Snake implements Contestant
{
    /**
     * @var CrossRiverBehavior
     */
    protected $crossRiverBehavior;

    public function __construct()
    {
        $this->crossRiverBehavior = new Slither();
    }

    public function crossRiver()
    {
        $this->crossRiverBehavior->crossRiver();
    }
}
