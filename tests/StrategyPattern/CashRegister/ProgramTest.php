<?php

namespace Tests\StrategyPattern\CashRegister;

use PHPUnit\Framework\TestCase;
use App\StrategyPattern\CashRegister\Program;

class ProgramTest extends TestCase
{
    private $sut;

    public function testNormalCase()
    {
        $param = (object) [
            'originalPrice' => 100
        ];

        $this->priceShouldBe($param, 100);
    }

    private function priceShouldBe($param, $expected)
    {
        $originalPrice = $param->originalPrice;
        $this->sut = new Program($originalPrice);

        $actual = $this->sut->pay();
        $this->assertEquals($expected, $actual);
    }
}
