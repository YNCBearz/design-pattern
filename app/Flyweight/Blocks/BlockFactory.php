<?php

namespace App\Flyweight\Blocks;

use App\Flyweight\Blocks\ConcreteBlock;
use App\Flyweight\Blocks\Contracts\Block;

class BlockFactory
{
    /**
     * @var Block[]
     */
    protected $blocks;

    /**
     * @param string $shape
     * @return ConcreteBlock
     */
    public function getBlock(string $shape): Block
    {
        if (!isset($this->blocks[$shape])) {
            $this->blocks[$shape] = new ConcreteBlock($shape);
        }

        return $this->blocks[$shape];
    }
}
