<?php

namespace Tests\Unit\StrategyPattern\CashRegister;

use PHPUnit\Framework\TestCase;
use App\StrategyPattern\CashRegister\Program;

class ProgramTest extends TestCase
{
    private $sut;

    public function testNormalCase()
    {
        $param = (object) [
            'originalPrice' => 100,
            'promotion' => 'normal',
            'receiptType' => 'normal'
        ];

        $this->priceShouldBe($param, 100);
    }

    private function priceShouldBe($param, $expected)
    {
        $originalPrice = $param->originalPrice;
        $promotion = $param->promotion;
        $receiptType = $param->receiptType;
        $this->sut = new Program($originalPrice, $promotion, $receiptType);

        $actual = $this->sut->pay();
        $this->assertEquals($expected, $actual);
    }

    public function test20PercentOff()
    {
        $param = (object) [
            'originalPrice' => 100,
            'promotion' => '20% off',
            'receiptType' => 'normal'
        ];

        $this->priceShouldBe($param, 80);
    }

    public function testSpend300Feedback100_Given400()
    {
        $param = (object) [
            'originalPrice' => 400,
            'promotion' => 'spend_300_feedback_100',
            'receiptType' => 'normal'
        ];

        $this->priceShouldBe($param, 300);
    }

    public function testSpend300Feedback100_Given700()
    {
        $param = (object) [
            'originalPrice' => 700,
            'promotion' => 'spend_300_feedback_100',
            'receiptType' => 'normal'
        ];

        $this->priceShouldBe($param, 500);
    }

    public function testSpend300Feedback100_Given200()
    {
        $param = (object) [
            'originalPrice' => 200,
            'promotion' => 'spend_300_feedback_100',
            'receiptType' => 'normal'
        ];

        $this->priceShouldBe($param, 200);
    }

    private function receiptShouldBe($param, $expected)
    {
        $originalPrice = $param->originalPrice;
        $promotion = $param->promotion;
        $receiptType = $param->receiptType;

        $this->sut = new Program($originalPrice, $promotion, $receiptType);

        $actual = $this->sut->getReceipt();
        $this->assertEquals($expected, $actual);
    }

    public function testElectronicReceipt()
    {
        $param = (object) [
            'originalPrice' => 100,
            'promotion' => 'normal',
            'receiptType' => 'electronicReceipt'
        ];

        $this->receiptShouldBe($param, '電子發票');
    }
    public function testNormalReceipt()
    {
        $param = (object) [
            'originalPrice' => 100,
            'promotion' => 'normal',
            'receiptType' => 'normal'
        ];

        $this->receiptShouldBe($param, '一般發票');
    }
}
