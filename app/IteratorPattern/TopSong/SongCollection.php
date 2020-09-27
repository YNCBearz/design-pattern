<?php

namespace App\IteratorPattern\TopSong;

use IteratorAggregate;
use Traversable;

class SongCollection implements IteratorAggregate
{
    /**
     * @var array
     */
    protected $items = [];

    public function addSong(Song $song)
    {
        $this->item[] = $song;
    }

    public function getIterator(): Traversable
    {
        return new SongIterator($this);
    }
}
