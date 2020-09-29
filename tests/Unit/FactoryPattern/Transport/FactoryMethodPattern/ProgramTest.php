<?php

namespace Tests\Unit\FactoryPattern\Transport\FactoryMethodPattern;

use PHPUnit\Framework\TestCase;
use App\FactoryPattern\Transport\FactoryMethodPattern\Program;

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

    public function testRailwaySemiExpress()
    {
        $expected = '復興號';
        $actual = $this->sut->getModel('SemiExpress');
        $this->assertEquals($expected, $actual);
    }

    public function testRailwayLimitedExpress()
    {
        $expected = '自強號';
        $actual = $this->sut->getModel('LimitedExpress');
        $this->assertEquals($expected, $actual);
    }

    public function testPlaneBoeing747()
    {
        $expected = '波音747';
        $actual = $this->sut->getModel('Boeing747');
        $this->assertEquals($expected, $actual);
    }
}
