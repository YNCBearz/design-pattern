<?php

namespace App\BridgePattern\Zodiac\Contestants;

use App\BridgePattern\Zodiac\CrossRiverBehaviors\Swim;
use App\BridgePattern\Zodiac\Abstracts\Contestant;

class Ox extends Contestant
{
    /**
     * @var Swim
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
