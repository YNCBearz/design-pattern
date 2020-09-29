<?php

namespace Tests\Unit\SOLID\ISP\CoffeeMachine;

use PHPUnit\Framework\TestCase;
use App\SOLID\ISP\CoffeeMachine\AutomaticCoffeeMachine;

class AutomaticCoffeeMachineTest extends TestCase
{
    /**
     * @var AutomaticCoffeeMachine
     */
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new AutomaticCoffeeMachine();
    }


    public function testGrind()
    {
        $expected = '咖啡粉';
        $actual = $this->sut->grind('咖啡豆');
        $this->assertEquals($expected, $actual);
    }

    public function testBrew()
    {
        $expected = '咖啡';
        $actual = $this->sut->brew('咖啡粉');
        $this->assertEquals($expected, $actual);
    }
}
