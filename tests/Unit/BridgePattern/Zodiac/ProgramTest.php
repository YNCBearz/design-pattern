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
        $this->expectOutputString('站在水牛背上');
        $this->sut->crossRiver('rat');
    }
}
