<?php

namespace Tests\Unit\ProxyPattern\Cache;

use PHPUnit\Framework\TestCase;
use App\ProxyPattern\Cache\Program;

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
    public function Given_NoCache_When_SearchSushi_Then_ReturnExpectedOutcomes()
    {
        $keyword = 'sushi';
        $expected = ['Bear Sushi', 'Lin Sushi', 'Alysa Sushi'];

        $actual = $this->sut->search($keyword);
        $this->assertEquals($expected, $actual);
    }
}
