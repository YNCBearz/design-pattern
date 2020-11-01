<?php

namespace App\Flyweight\Blocks;

class Block
{
    /**
     * @var string
     */
    public $shape;

    /**
     * @var string
     */
    public $word;

    /**
     * @param string $shape
     * @param string $word
     */
    public function __construct(string $shape, string $word)
    {
        $this->shape = $shape;
        $this->word = $word;
    }
}
