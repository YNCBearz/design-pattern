<?php

namespace Tests\Unit\SOLID\DIP\PowerSystems;

use PHPUnit\Framework\TestCase;
use App\SOLID\DIP\PowerSystems\Program;

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

    public function testGetPower()
    {
        $expected = '電力';
        $actual = $this->sut->getPower();
        $this->assertEquals($expected, $actual);
    }
}
