<?php

namespace App\BridgePattern\Zodiac\Contestants;

use App\BridgePattern\Zodiac\CrossRiverBehaviors\Slither;
use App\BridgePattern\Zodiac\Abstracts\Contestant;

class Snake extends Contestant
{
    /**
     * @var Slither
     */
    protected $crossRiverBehavior;

    public function __construct()
    {
        $this->crossRiverBehavior = new Slither();
    }
}
