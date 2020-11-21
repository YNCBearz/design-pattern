<?php

namespace App\BridgePattern\Zodiac\Contestants;

use App\BridgePattern\Zodiac\Contracts\Contestant;
use App\BridgePattern\Zodiac\Swim;
use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

class Ox implements Contestant
{
    /**
     * @var CrossRiverBehavior
     */
    protected $crossRiverBehavior;

    public function __construct()
    {
        $this->crossRiverBehavior = new Swim();
    }

    public function crossRiver()
    {
        $this->crossRiverBehavior->crossRiver();
    }
}
