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

    public function testSayHello()
    {
        $expected = '[嘴巴]發出[你好]的聲音';
        $actual = $this->sut->sayHello();
        $this->assertEquals($expected, $actual);
    }

    public function testWaveHand()
    {
        $expected = '[手]做出[揮手]的動作';
        $actual = $this->sut->waveHand();
        $this->assertEquals($expected, $actual);
    }

    public function testBlush()
    {
        $expected = '[臉]開始[發紅]';
        $actual = $this->sut->blush();
        $this->assertEquals($expected, $actual);
    }
}
