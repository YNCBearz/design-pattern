<?php

namespace App\IteratorPattern\TopSong;

use App\IteratorPattern\TopSong\SongCollection;
use Iterator;

class SongIterator implements Iterator
{
    /**
     * @var SongCollection
     */
    protected $collection;

    /**
     * @var int
     */
    private $position = 0;

    public function __construct(SongCollection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * Return the current element
     *
     * @return Song
     */
    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    /**
     * Return the key of the current element
     *
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        $this->position++;
    }

    /**
     * Rewind the Iterator to the first element
     *
     * @return int
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * Checks if current position is valid
     *
     * @return void
     */
    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}
