<?php

namespace App\IteratorPattern\TopSong;

use App\IteratorPattern\TopSong\SongCollection;

class Program
{
    /**
     * @var SongCollection
     */
    protected $songCollection;

    public function __construct(array $songs)
    {
        $this->songCollection = new SongCollection($songs);
    }

    public function list()
    {
        $iterator = $this->songCollection->getIterator();
        foreach ($iterator as $item) {
            $result[] = $item->getName();
        }

        return $result;
    }
}
