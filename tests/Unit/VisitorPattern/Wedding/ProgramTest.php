<?php

namespace Tests\Unit\VisitorPattern\Wedding;

use PHPUnit\Framework\TestCase;
use App\VisitorPattern\Wedding\Program;

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


    /**
     * @test
     */
    public function Given_Chinese_Wedding_When_Get_BrideGroom_Clothes_Then_Return_Result()
    {
        $expected = '中式囍袍';
        $type = 'Chinese';
        $actual = $this->sut->getBrideGroomClothes($type);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function Given_Japanese_Wedding_When_Get_BrideGroom_Clothes_Then_Return_Result()
    {
        $expected = '繡有家紋的和服';
        $type = 'Japanese';
        $actual = $this->sut->getBrideGroomClothes($type);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function Given_Japanese_Wedding_When_Get_Bride_Clothes_Then_Return_Result()
    {
        $expected = '龍鳳褂';
        $weddingType = 'Chinese';
        $actual = $this->sut->getBrideClothes($weddingType);
        $this->assertEquals($expected, $actual);
    }
}
