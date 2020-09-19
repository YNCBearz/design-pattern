<?php

namespace Tests\Unit\SOLID\ISP\CoffeeMachine;

use PHPUnit\Framework\TestCase;
use App\SOLID\ISP\CoffeeMachine\Program;

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

    public function testGetCoffeeByAutomaticCoffeeMachine()
    {
        $expected = '咖啡';
        $actual = $this->sut->getCoffeeByAutomaticCoffeeMachine('咖啡豆');
        $this->assertEquals($expected, $actual);
    }
}
