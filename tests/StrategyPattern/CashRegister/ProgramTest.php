<?php

namespace Tests\StrategyPattern\CashRegister;

use PHPUnit\Framework\TestCase;
use App\StrategyPattern\CashRegister\Program;

class ProgramTest extends TestCase
{
    private $sut;

    public function testNormalCase()
    {
        $originalPrice = 100;
        $this->sut = new Program($originalPrice);
        $expected = $originalPrice;

        $actual = $this->sut->pay();

        $this->assertEquals($expected, $actual);
    }
}
