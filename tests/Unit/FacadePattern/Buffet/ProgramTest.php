<?php

namespace Tests\Unit\FacadePattern\Buffet;

use PHPUnit\Framework\TestCase;
use App\FacadePattern\Buffet\Program;

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

    public function testMakeIceCream()
    {
        $expected = '霜淇淋';
        $actual = $this->sut->makeIceCream();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeLatte()
    {
        $expected = '拿鐵';
        $actual = $this->sut->makeLatte();
        $this->assertEquals($expected, $actual);
    }
}
