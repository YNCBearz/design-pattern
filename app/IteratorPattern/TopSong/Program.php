<?php

namespace App\IteratorPattern\TopSong;

class Program
{
    /**
     * @var array
     */
    protected $songLists;

    public function __construct(array $songLists)
    {
        $this->songLists = $songLists;
    }

    public function list()
    {
        $result = [];
        foreach ($this->songLists as $song) {
            $result[] = $song['name'];
        }

        return $result;
    }
}
