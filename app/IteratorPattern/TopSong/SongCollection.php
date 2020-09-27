<?php

namespace App\IteratorPattern\TopSong;

use IteratorAggregate;
use Traversable;

class SongCollection implements IteratorAggregate
{
    /**
     * @var Song[]
     */
    protected $items = [];

    public function __construct(array $dataOfSongs)
    {
        $this->items = $this->generateSongs($dataOfSongs);
    }

    /**
     * @param array $dataOfSongs
     * @return Song[]
     */
    private function generateSongs($dataOfSongs)
    {
        foreach ($dataOfSongs as $dataOfSong) {
            $result[] = new Song($dataOfSong);
        }

        return $result;
    }

    /**
     * @return Song[]
     */
    public function getItems()
    {
        return $this->items;
    }

    public function getIterator(): Traversable
    {
        return new SongIterator($this);
    }
}
