<?php

namespace App\BridgePattern\Zodiac;

use App\BridgePattern\Zodiac\Rat;
use App\BridgePattern\Zodiac\Ox;

class Program
{
    /**
     * @param string $animal
     */
    public function crossRiver($animal)
    {
        switch ($animal) {
            case 'rat':
                $rat = new Rat();
                $rat->crossRiver();
                break;

            case 'ox':
                $ox = new Ox();
                $ox->crossRiver();
                break;

            case 'dragon':
                echo '壯麗地飛啊飛';
                break;

            case 'snake':
                echo '迅速地滑啊滑';
                break;
        }
    }
}
