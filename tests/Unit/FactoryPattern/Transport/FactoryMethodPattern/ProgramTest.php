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

    public function testPayByCash()
    {
        $expected = '高速鐵路：現金付款';
        $actual = $this->sut->pay('cash');
        $this->assertEquals($expected, $actual);
    }

    public function testPayByCreditCard()
    {
        $expected = '高速鐵路：信用卡付款';
        $actual = $this->sut->pay('creditCard');
        $this->assertEquals($expected, $actual);
    }
}
