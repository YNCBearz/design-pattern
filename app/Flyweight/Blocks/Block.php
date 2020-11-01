<?php

namespace App\Flyweight\Blocks;

class Block
{
    /**
     * @var string
     */
    protected $shape;

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

    /**
     * @return string
     */
    public function getShape(): string
    {
        return $this->shape;
    }

    /**
     * @return string
     */
    public function getWord(): string
    {
        return $this->word;
    }
}
