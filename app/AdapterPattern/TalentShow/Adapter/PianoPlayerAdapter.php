<?php

namespace App\AdapterPattern\TalentShow\Adapter;

use App\AdapterPattern\TalentShow\PianoPlayer;
use App\AdapterPattern\TalentShow\Contracts\ShowInterface;

class PianoPlayerAdapter implements ShowInterface
{
    /**
     * @var PianoPlayer
     */
    protected $pianoPlayer;

    public function __construct(PianoPlayer $pianoPlayer)
    {
        $this->pianoPlayer = $pianoPlayer;
    }

    public function show()
    {
        return $this->pianoPlayer->play();
    }
}
