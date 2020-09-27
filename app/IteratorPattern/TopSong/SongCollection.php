<?php

namespace App\IteratorPattern\TopSong;

use IteratorAggregate;
use Traversable;

class SongCollection
{
    /**
     * @var Song[]
     */
    protected $items = [];

    public function __construct(array $originalSongs)
    {
        $this->items = $this->generateSongs($originalSongs);
    }

    /**
     * @param array $originalSongs
     * @return Song[]
     */
    private function generateSongs($originalSongs)
    {
        $result = [];
        foreach ($originalSongs as $originalSong) {
            $result[] = new Song($originalSong);
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

    /**
     * @return array
     */
    public function list()
    {
        foreach ($this->items as $item) {
            $result[] = $item->getName();
        }

        return $result;
    }
}
