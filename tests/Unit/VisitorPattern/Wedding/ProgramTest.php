<?php

namespace Tests\Unit\VisitorPattern\Wedding;

use PHPUnit\Framework\TestCase;
use App\VisitorPattern\Wedding\Program;

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

    public function testChineseWedding()
    {
        $expected =
            '新郎：中式囍袍
新郎：黑色秀禾鞋
新娘：龍鳳褂
新娘：紅色秀禾鞋';
        $weddingType = 'Chinese';
        $this->sut->getWedding($weddingType);
        $this->expectOutputString($expected);
    }

    public function testJapaneseWedding()
    {
        $expected =
            '新郎：繡有家紋的和服
新郎：雪駄
新娘：純潔的白無垢
新娘：草履';
        $weddingType = 'Japanese';
        $this->sut->getWedding($weddingType);
        $this->expectOutputString($expected);
    }
}
