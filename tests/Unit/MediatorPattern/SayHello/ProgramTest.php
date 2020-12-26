<?php

namespace Tests\Unit\MediatorPattern\SayHello;

use PHPUnit\Framework\TestCase;
use App\MediatorPattern\SayHello\Program;

class ProgramTest extends TestCase
{
    /**
     * @var Program
     */
    protected $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new Program();
    }

    /**
     * @test
     */
    public function Given_People_You_Know_When_See_Then_Say_Hello()
    {
        $expected = '[嘴巴]發出[你好]的聲音';
        $actual = $this->sut->see('認識的人');
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function Given_Friend_When_See_Then_Wave_Hand()
    {
        $expected = '[手]做出[揮手]的動作';
        $actual = $this->sut->see('熟識的人');
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function Given_Lover_When_Hear_Then_Blush()
    {
        $expected = '[臉]開始[發紅]';
        $actual = $this->sut->hear('喜歡的人');
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function Given_Asshole_When_Hear_Then_Pretend_To_Look_Busy()
    {
        $expected = '[手]做出[裝忙]的動作';
        $actual = $this->sut->hear('討厭的人');
        $this->assertEquals($expected, $actual);
    }
}
