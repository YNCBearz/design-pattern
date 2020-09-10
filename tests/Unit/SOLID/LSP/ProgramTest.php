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
    protected $program;

    public function setUp(): void
    {
        $this->sut = new Program();
    }

    public function testUseMoneyGetFoodFromDadRestaurant()
    {
        $expected = Eatable::class;
        $money = 100;

        $actual = $this->sut->useMoneyToGetFood($money);

        $this->assertInstanceOf($expected, $actual);
    }
}
