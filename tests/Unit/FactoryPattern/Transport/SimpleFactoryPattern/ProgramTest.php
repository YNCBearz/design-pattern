<?php

namespace Tests\Unit\FactoryPattern\Transport\SimpleFactoryPattern;

use PHPUnit\Framework\TestCase;
use App\FactoryPattern\Transport\SimpleFactoryPattern\Program;

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

    public function testRailwayLocalTrain()
    {
        $expected = '區間車';
        $actual = $this->sut->getModel('LocalTrain');
        $this->assertEquals($expected, $actual);
    }

    public function testRailwayLimitedExpress()
    {
        $expected = '自強號';
        $actual = $this->sut->getModel('LimitedExpress');
        $this->assertEquals($expected, $actual);
    }
}
