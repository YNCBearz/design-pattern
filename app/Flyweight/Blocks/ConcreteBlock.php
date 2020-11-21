<?php

namespace App\Flyweight\Blocks;

use App\Flyweight\Blocks\Contracts\Block;

class ConcreteBlock implements Block
{
    /**
     * @var string
     */
    protected $shape;

    /**
     * @param string $shape
     */
    public function __construct(string $shape)
    {
        $this->shape = $shape;
    }

    /**
     * @return string
     */
    public function getShape(): string
    {
        return $this->shape;
    }

    /**
     * @param string $word
     * @return string
     */
    public function display(string $word): string
    {
        return $word;
    }
}
