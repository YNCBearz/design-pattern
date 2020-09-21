<?php

namespace Tests\Feature\SOLID\DIP\PowerSystems;

use PHPUnit\Framework\TestCase;
use App\SOLID\DIP\PowerSystems\Program;
use App\SOLID\DIP\PowerSystems\ThermalPower;

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

    public function testGetPowerByThermalPower()
    {
        $expected = '電力';
        $powerGeneration = new ThermalPower();
        $actual = $this->sut->getPower($powerGeneration);
        $this->assertEquals($expected, $actual);
    }
}
