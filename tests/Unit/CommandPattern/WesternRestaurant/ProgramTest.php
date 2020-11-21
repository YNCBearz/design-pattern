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

        $this->foodShouldBe($order, $expected);
    }

    public function testMakeSirloinSteakOrder()
    {
        $expected = ['沙朗牛排'];

        $order = [
            'Sirloin Steak'
        ];

        $this->foodShouldBe($order, $expected);
    }

    public function testMakeFiletAndSirloinOrder()
    {
        $expected = ['菲力牛排', '沙朗牛排'];

        $order = [
            'Filet Mignon',
            'Sirloin Steak'
        ];

        $this->foodShouldBe($order, $expected);
    }

    /**
     * @param array $order
     * @param array $expected
     */
    private function foodShouldBe($order, $expected)
    {
        $actual = $this->sut->makeOrder($order);
        $this->assertEquals($expected, $actual);
    }
}
