<?php

namespace Tests\Unit\DecoratorPattern\Burger;

use PHPUnit\Framework\TestCase;
use App\DecoratorPattern\Burger\Program;

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

    public function testMakeBigMac()
    {
        $expected = '大麥克：麵包、牛肉、生菜、沙拉、麵包、牛肉、起司、生菜、沙拉、麵包';

        $actual = $this->sut->makeBigMac();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeBigMacWithNoSalad()
    {
        $expected = '大麥克：麵包、牛肉、生菜、麵包、牛肉、起司、生菜、麵包';

        $this->sut->setDemand([
            'salad' => 'none'
        ]);

        $actual = $this->sut->makeBigMac();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeBigMacWithDoubleCheese()
    {
        $expected = '大麥克：麵包、牛肉、生菜、沙拉、麵包、牛肉、兩倍起司、生菜、沙拉、麵包';

        $this->sut->setDemand([
            'cheese' => 'double'
        ]);
        $actual = $this->sut->makeBigMac();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeDoubleCheeseBurger()
    {
        $expected = '雙層牛肉吉事堡：麵包、酸菜、起司、牛肉、起司、牛肉、麵包';

        $actual = $this->sut->makeDoubleCheeseBurger();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeDoubleCheeseBurgerWithNoPickle()
    {
        $expected = '雙層牛肉吉事堡：麵包、起司、牛肉、起司、牛肉、麵包';

        $this->sut->setDemand([
            'pickle' => 'none'
        ]);
        $actual = $this->sut->makeDoubleCheeseBurger();
        $this->assertEquals($expected, $actual);
    }
}
