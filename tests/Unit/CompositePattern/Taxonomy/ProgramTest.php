<?php

namespace Tests\Unit\CompositePattern\Taxonomy;

use PHPUnit\Framework\TestCase;
use App\CompositePattern\Taxonomy\Program;

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

    /**
     * @test
     */
    public function Given_Koala_When_Get_Taxonomy_Then_Return_Result()
    {
        $animal = 'koala';
        $expected = '
        動物界
        -- 脊索動物門
        ---- 哺乳綱
        ------ 雙門齒目
        -------- 無尾熊科
        ---------- 無尾熊屬
        ------------ 無尾熊
        ';

        $this->sut->getTaxonomy($animal);
        $this->expectOutputString($expected);
    }

    /**
     * @test
     */
    public function Given_King_Penguin_When_Get_Taxonomy_Then_Return_Result()
    {
        $animal = 'king penguin';
        $expected = '
        動物界
        -- 脊索動物門
        ---- 鳥綱
        ------ 企鵝目
        -------- 企鵝科
        ---------- 王企鵝屬
        ------------ 國王企鵝
        ';

        $this->sut->getTaxonomy($animal);
        $this->expectOutputString($expected);
    }
}
