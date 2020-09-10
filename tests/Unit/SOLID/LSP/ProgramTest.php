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

    public function testUseMoneyInDadRestaurantToGetFood()
    {
        $expected = Eatable::class;
        $money = 100;
        $actual = $this->sut->useMoneyInDadRestaurantToGetFood($money);
        $this->assertInstanceOf($expected, $actual);
    }

    public function testUseCardInDadRestaurantCannotGetFood()
    {
        $card = '信用卡';
        $this->expectExceptionMessage('我們只收現金');
        $this->sut->useMoneyInDadRestaurantToGetFood($card);
    }

    public function testUseCardInSonRestaurantToGetFood()
    {
        $expected = Eatable::class;
        $card = '信用卡';
        $actual = $this->sut->useMoneyInSonRestaurantToGetFood($card);
        $this->assertInstanceOf($expected, $actual);
    }

    public function testUseMoneyInSonRestaurantToGetFood()
    {
        $expected = Eatable::class;
        $money = 100;
        $actual = $this->sut->useMoneyInSonRestaurantToGetFood($money);
        $this->assertInstanceOf($expected, $actual);
    }
}
