<?php

namespace Tests\Unit\CommandPattern\WesternRestaurant;

use PHPUnit\Framework\TestCase;
use App\CommandPattern\WesternRestaurant\Program;

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

    public function testMakeFiletMignonOrder()
    {
        $expected = [
            '菲力牛排'
        ];

        $order = [
            'Filet Mignon'
        ];

        $actual = $this->sut->makeOrder($order);
        $this->assertEquals($expected, $actual);
    }

    public function testMakeSirloinSteakOrder()
    {
        $expected = ['沙朗牛排'];

        $order = [
            'Sirloin Steak'
        ];

        $actual = $this->sut->makeOrder($order);
        $this->assertEquals($expected, $actual);
    }
}
