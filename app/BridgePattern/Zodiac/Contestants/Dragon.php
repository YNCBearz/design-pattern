<?php

namespace App\BridgePattern\Zodiac\Contestants;

use App\BridgePattern\Zodiac\CrossRiverBehaviors\FlyWithNoWings;
use App\BridgePattern\Zodiac\Abstracts\Contestant;

class Dragon extends Contestant
{
    /**
     * @var FlyWithNoWings
     */
    protected $crossRiverBehavior;

    public function __construct()
    {
        $this->crossRiverBehavior = new FlyWithNoWings();
    }

    public function crossRiver()
    {
        $this->crossRiverBehavior->crossRiver();
    }
}
