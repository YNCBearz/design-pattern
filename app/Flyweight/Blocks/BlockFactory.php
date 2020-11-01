<?php

namespace App\Flyweight\Blocks;

use App\Flyweight\Blocks\ConcreteBlock;

class BlockFactory
{
    /**
     * @var ConcreteBlock[]
     */
    protected $blocks;

    /**
     * @param string $shape
     * @return ConcreteBlock
     */
    public function getBlock(string $shape): ConcreteBlock
    {
        if (!isset($this->blocks[$shape])) {
            $this->blocks[$shape] = new ConcreteBlock($shape);
        }

        return $this->blocks[$shape];
    }
}
