<?php

namespace App\IteratorPattern\TopSong;

class Program
{
    /**
     * @var Song[]
     */
    protected $songs;

    public function __construct(array $songs)
    {
        // $this->songs = $this->generateSongs($songs);
        $this->songs = $songs;
    }

    private function generateSongs()
    {
    }

    public function list()
    {
        $result = [];
        foreach ($this->songs as $song) {
            $result[] = $song['name'];
        }

        return $result;
    }
}
