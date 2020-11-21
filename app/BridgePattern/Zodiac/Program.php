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
                echo '站在水牛背上';
                break;

            case 'ox':
                echo '努力地游啊游';
                break;
        }
    }
}
