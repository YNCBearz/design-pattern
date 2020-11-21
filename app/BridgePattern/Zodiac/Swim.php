<?php

namespace App\BridgePattern\Zodiac;

use App\BridgePattern\Zodiac\Contracts\CrossRiverBehavior;

class Swim implements CrossRiverBehavior
{
    public function crossRiver()
    {
        $this->swim();
    }

    private function swim()
    {
        echo '努力地游啊游';
    }
}
