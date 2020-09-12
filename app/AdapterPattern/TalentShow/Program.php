<?php

namespace App\AdapterPattern\TalentShow;

use App\AdapterPattern\TalentShow\Adapter\PianoPlayerAdapter;
use App\AdapterPattern\TalentShow\Adapter\JokeTellerAdapter;
use App\AdapterPattern\TalentShow\Contracts\ShowInterface;

class Program
{
    /**
     * @var ShowInterface[]
     */
    protected $performers = [];

    /**
     * @return array
     */
    public function run()
    {
        $this->preparePerformers();

        $result = [];
        foreach ($this->performers as $performer) {
            $result[] = $performer->show();
        }

        return $result;
    }

    private function preparePerformers()
    {
        $pianoPlayer = new PianoPlayer();
        $this->performers[] = new PianoPlayerAdapter($pianoPlayer);

        $jokeTeller = new JokeTeller();
        $this->performers[] = new JokeTellerAdapter($jokeTeller);
    }
}
