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
        $expected = '菲力牛排';

        $order = [
            'Filet Mignon'
        ];

        $actual = $this->sut->makeOrder($order);
        $this->assertEquals($expected, $actual);
    }
}
