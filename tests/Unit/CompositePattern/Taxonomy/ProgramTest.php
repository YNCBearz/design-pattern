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
    public function Given_Polar_Bear_When_Get_Taxonomy_Then_Return_Result()
    {
        $animal = 'polar bear';
        $expected = '
        動物界
        -- 脊索動物門
        ---- 哺乳綱
        ------ 食肉目
        -------- 熊科
        ---------- 熊屬
        ------------ 北極熊
        ';

        $this->sut->getTaxonomy($animal);
        $this->expectOutputString($expected);
    }

    /**
     * @test
     */
    public function Given_Dog_When_Get_Taxonomy_Then_Return_Result()
    {
        $animal = 'dog';
        $expected = '
        動物界
        -- 脊索動物門
        ---- 哺乳綱
        ------ 食肉目
        -------- 犬科
        ---------- 犬屬
        ------------ 狼
        ';

        $this->sut->getTaxonomy($animal);
        $this->expectOutputString($expected);
    }
}
