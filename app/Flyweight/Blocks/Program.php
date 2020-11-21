<?php

namespace App\Flyweight\Blocks;

use App\Flyweight\Blocks\Block;

class Program
{
    /**
     * @return array
     */
    public function getBlocks(): array
    {
        $blockFactory = new BlockFactory();

        $firstBlock = $blockFactory->getBlock('star');
        $secondBlock = $blockFactory->getBlock('square');
        $thirdBlock = $blockFactory->getBlock('square');
        $fourthBlock = $blockFactory->getBlock('square');

        return [$firstBlock, $secondBlock, $thirdBlock, $fourthBlock];
    }
}
