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
            'originalPrice' => 100,
            'promotion' => 'No'
        ];

        $this->priceShouldBe($param, 100);
    }

    private function priceShouldBe($param, $expected)
    {
        $originalPrice = $param->originalPrice;
        $promotion = $param->promotion;
        $this->sut = new Program($originalPrice, $promotion);

        $actual = $this->sut->pay();
        $this->assertEquals($expected, $actual);
    }

    public function test20PercentOff()
    {
        $param = (object) [
            'originalPrice' => 100,
            'promotion' => '20% off'
        ];

        $this->priceShouldBe($param, 80);
    }

    public function testSpend300Feedback100_Given400()
    {
        $param = (object) [
            'originalPrice' => 400,
            'promotion' => 'spend_300_feedback_100'
        ];

        $this->priceShouldBe($param, 300);
    }

    public function testSpend300Feedback100_Given700()
    {
        $param = (object) [
            'originalPrice' => 700,
            'promotion' => 'spend_300_feedback_100'
        ];

        $this->priceShouldBe($param, 500);
    }

    public function testSpend300Feedback100_Given200()
    {
        $param = (object) [
            'originalPrice' => 200,
            'promotion' => 'spend_300_feedback_100'
        ];

        $this->priceShouldBe($param, 200);
    }
}
