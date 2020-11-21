<?php

namespace App\PrototypePattern\Building;

class Wall
{
    /**
     * @var string
     */
    public $material;

    public function __construct(string $material)
    {
        $this->material = $material;
    }
}
