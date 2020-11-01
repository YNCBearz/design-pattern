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
        $firstBlock = new Block('star', 'B');
        $secondBlock = new Block('square', 'E');
        $thirdBlock = new Block('square', 'A');
        $fourthBlock = new Block('square', 'R');

        return [$firstBlock, $secondBlock, $thirdBlock, $fourthBlock];
    }
}
