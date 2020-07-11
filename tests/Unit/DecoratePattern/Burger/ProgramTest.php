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

        $actual = $this->sut->makeBigMac();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeBigMacWithNoSauce()
    {
        $expected = '麵包、肉、生菜、麵包、肉、起司、生菜、麵包';

        $this->sut->customize([
            'sauce' => 'none'
        ]);

        $actual = $this->sut->makeBigMac();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeBigMacWithDoubleCheese()
    {
        $expected = '麵包、肉、生菜、沙拉、麵包、肉、起司、起司、生菜、沙拉、麵包';

        $this->sut->customize([
            'cheese' => 'double'
        ]);
        $actual = $this->sut->makeBigMac();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeDoubleCheeseBurger()
    {
        $expected = '麵包、酸菜、起司、肉、起司、肉、麵包';

        $actual = $this->sut->makeDoubleCheeseBurger();
        $this->assertEquals($expected, $actual);
    }
}
