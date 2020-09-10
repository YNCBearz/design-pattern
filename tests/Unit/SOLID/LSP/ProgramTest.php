<?php

namespace Tests\Unit\SOLID\LSP;

use PHPUnit\Framework\TestCase;
use App\SOLID\LSP\Restaurant\Program;
use App\SOLID\LSP\Restaurant\Contracts\Eatable;

class ProgramTest extends TestCase
{
    /**
     * @var Program
     */
    protected $sut;

    public function setUp(): void
    {
        $this->sut = new Program();
    }

    public function testUseMoneyInDadRestaurant()
    {
        $expected = Eatable::class;
        $money = 100;
        $actual = $this->sut->getFoodInDadRestaurant($money);
        $this->assertInstanceOf($expected, $actual);
    }

    public function testUseCardInDadRestaurant()
    {
        $card = '信用卡';
        $this->expectExceptionMessage('我們只收現金');
        $this->sut->getFoodInDadRestaurant($card);
    }

    public function testUseCardInSonRestaurant()
    {
        $expected = Eatable::class;
        $card = '信用卡';
        $actual = $this->sut->getFoodInSonRestaurant($card);
        $this->assertInstanceOf($expected, $actual);
    }

    public function testUseMoneyInSonRestaurant()
    {
        $expected = Eatable::class;
        $money = 100;
        $actual = $this->sut->getFoodInSonRestaurant($money);
        $this->assertInstanceOf($expected, $actual);
    }
}
