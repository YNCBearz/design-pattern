<?php

namespace App\PrototypePattern\Building;

use App\PrototypePattern\Building\Wall;

class Building
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var Wall
     */
    public $wall;

    /**
     * @param Wall $wall
     * @param string $name
     */
    public function __construct(Wall $wall, string $name = 'unnamed')
    {
        $this->wall = $wall;
        $this->name = $name;
    }

    public function __clone()
    {
        $this->wall = clone $this->wall;
    }
}
