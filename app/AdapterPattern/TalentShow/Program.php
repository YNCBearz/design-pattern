<?php

namespace App\AdapterPattern\TalentShow;

use App\AdapterPattern\TalentShow\Adapter\PianoPlayerAdapter;
use App\AdapterPattern\TalentShow\Adapter\JokeTellerAdapter;

class Program
{
    /**
     * @return array
     */
    public function run()
    {
        $performers = [];

        $pianoPlayer = new PianoPlayer();
        $performers[] = new PianoPlayerAdapter($pianoPlayer);

        $jokeTeller = new JokeTeller();
        $performers[] = new JokeTellerAdapter($jokeTeller);

        $result = [];
        foreach ($performers as $performer) {
            $result[] = $performer->show();
        }

        return $result;
    }
}
