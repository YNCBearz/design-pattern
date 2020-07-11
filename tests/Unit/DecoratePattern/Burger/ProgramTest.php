<?php

namespace Tests\Unit\DecoratePattern\Burger;

use PHPUnit\Framework\TestCase;
use App\DecoratePattern\Burger\Program;

class ProgramTest extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Program();
    }

    public function testMakeBigMac()
    {
        $expected = '麵包、肉、生菜、沙拉、麵包、肉、起司、生菜、沙拉、麵包';

        $actual = $this->sut->makeBurger('BigMac');
        $this->assertEquals($expected, $actual);
    }
}
