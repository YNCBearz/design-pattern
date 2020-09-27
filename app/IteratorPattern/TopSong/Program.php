<?php

namespace App\IteratorPattern\TopSong;

class Program
{
    public function __construct(array $songLists)
    {
        $this->songLists = $songLists;
    }

    public function listByReleaseDate()
    {
        return ['Light Years Away', 'Miss You 3000', 'Mojito'];
    }
}
