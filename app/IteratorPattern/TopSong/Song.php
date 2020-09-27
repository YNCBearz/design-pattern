<?php

namespace App\IteratorPattern\TopSong;

use DateTime;

class Song
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $singer;

    /**
     * @var DateTime
     */
    protected $releaseDate;

    public function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->singer = $data['singer'];
        $this->releaseDate = new DateTime($data['releaseDate']);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSinger()
    {
        return $this->singer;
    }

    /**
     * @return DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }
}
