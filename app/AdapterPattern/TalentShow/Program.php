<?php

namespace App\AdapterPattern\TalentShow;

class Program
{
    /**
     * @return array
     */
    public function run()
    {
        $result = [];

        $pianoPlayer = new PianoPlayer();
        $result[] = $pianoPlayer->play();

        $jokeTeller = new JokeTeller();
        $result[] =  $jokeTeller->tell();

        return $result;
    }
}
