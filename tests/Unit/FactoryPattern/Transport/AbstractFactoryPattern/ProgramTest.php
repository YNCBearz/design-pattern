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

    public function testRailwayLocalTrainChair()
    {
        $expected = '長型座椅';
        $actual = $this->sut->getChair('LocalTrain');
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

    public function testRailwaySemiExpressChair()
    {
        $expected = '對號座椅';
        $actual = $this->sut->getChair('SemiExpress');
        $this->assertEquals($expected, $actual);
    }

    public function testRailwayLimitedExpress()
    {
        $expected = '自強號';
        $actual = $this->sut->getModel('LimitedExpress');
        $this->assertEquals($expected, $actual);
    }

    public function testRailwayLimitedExpressChair()
    {
        $expected = '對號座椅';
        $actual = $this->sut->getChair('LimitedExpress');
        $this->assertEquals($expected, $actual);
    }

    public function testPlaneBoeing747()
    {
        $expected = '波音747';
        $actual = $this->sut->getModel('Boeing747');
        $this->assertEquals($expected, $actual);
    }

    public function testPlaneBoeing747Chair()
    {
        $expected = '飛機座椅';
        $actual = $this->sut->getChair('Boeing747');
        $this->assertEquals($expected, $actual);
    }
}
