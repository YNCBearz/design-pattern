<?php

namespace Tests\Unit\Flyweight\Blocks;

use PHPUnit\Framework\TestCase;
use App\Flyweight\Blocks\Program;
use App\Flyweight\Blocks\Block;

class ProgramTest extends TestCase
{
    /**
     * @var Program
     */
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Program();
    }

    public function testIsBlocks()
    {
        $className = Block::class;
        $haystack = $this->sut->getBlocks();

        $this->assertContainsOnlyInstancesOf($className, $haystack);
    }

    public function testDifferentShapeBlocks()
    {
        $blocks = $this->sut->getBlocks();

        $this->assertEquals('star', $blocks[0]->shape);
        $this->assertEquals('square', $blocks[1]->shape);
        $this->assertEquals('square', $blocks[2]->shape);
        $this->assertEquals('square', $blocks[3]->shape);
    }

    public function testIsWordBlocks()
    {
        $blocks = $this->sut->getBlocks();

        $this->assertEquals('B', $blocks[0]->word);
        $this->assertEquals('E', $blocks[1]->word);
        $this->assertEquals('A', $blocks[2]->word);
        $this->assertEquals('R', $blocks[3]->word);
    }
}
