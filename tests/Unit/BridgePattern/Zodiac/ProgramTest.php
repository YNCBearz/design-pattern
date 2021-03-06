<?php

namespace Tests\Unit\BridgePattern\Zodiac;

use PHPUnit\Framework\TestCase;
use App\BridgePattern\Zodiac\Program;

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

    public function testRatCrossRiver()
    {
        $this->expectOutputString('悠哉地站啊站');
        $this->sut->crossRiver('rat');
    }

    public function testOxCrossRiver()
    {
        $this->expectOutputString('努力地游啊游');
        $this->sut->crossRiver('ox');
    }

    public function testDragonCrossRiver()
    {
        $this->expectOutputString('壯麗地飛啊飛');
        $this->sut->crossRiver('dragon');
    }

    public function testSnakeCrossRiver()
    {
        $this->expectOutputString('迅速地滑啊滑');
        $this->sut->crossRiver('snake');
    }
}
