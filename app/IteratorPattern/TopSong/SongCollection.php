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
            $result[] = $this->addItem($dataOfSong);
        }

        return $result;
    }

    private function addItem(array $dataOfSong)
    {
        return new Song($dataOfSong);
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
