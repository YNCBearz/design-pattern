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

    public function testRun()
    {
        $expected = ['霜淇淋', '拿鐵'];

        $actual = $this->sut->run();

        $this->assertEquals($expected, $actual);
    }
}
