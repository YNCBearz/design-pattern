<?php

namespace Tests\Unit\FactoryPattern\Transport\AbstractFactoryPattern;

use PHPUnit\Framework\TestCase;
use App\FactoryPattern\Transport\AbstractFactoryPattern\Program;

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

    public function testRailwayLocalTrainCrew()
    {
        $expected = '區間車機組人員';
        $actual = $this->sut->getCrew('LocalTrain');
        $this->assertEquals($expected, $actual);
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

    public function testRailwaySemiExpressCrew()
    {
        $expected = '復興號機組人員';
        $actual = $this->sut->getCrew('SemiExpress');
        $this->assertEquals($expected, $actual);
    }

    public function testRailwayLimitedExpress()
    {
        $expected = '自強號';
        $actual = $this->sut->getModel('LimitedExpress');
        $this->assertEquals($expected, $actual);
    }

    public function testRailwayLimitedExpressCrew()
    {
        $expected = '自強號機組人員';
        $actual = $this->sut->getCrew('LimitedExpress');
        $this->assertEquals($expected, $actual);
    }

    public function testPlaneBoeing747()
    {
        $expected = '波音747';
        $actual = $this->sut->getModel('Boeing747');
        $this->assertEquals($expected, $actual);
    }

    public function testPlaneBoeing747Crew()
    {
        $expected = '波音747機組人員';
        $actual = $this->sut->getCrew('Boeing747');
        $this->assertEquals($expected, $actual);
    }
}
