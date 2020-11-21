<?php

namespace App\BridgePattern\Zodiac;

class Program
{
    /**
     * @param string $animal
     */
    public function crossRiver($animal)
    {
        switch ($animal) {
            case 'rat':
                echo '悠哉地站啊站';
                break;

            case 'ox':
                echo '努力地游啊游';
                break;

            case 'dragon':
                echo '翱翔在天空中';
                break;

            case 'snake':
                echo '迅速地滑啊滑';
                break;
        }
    }
}
