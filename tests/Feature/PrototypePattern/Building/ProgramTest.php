<?php

namespace Tests\Feature\PrototypePattern\Building;

use PHPUnit\Framework\TestCase;
use App\PrototypePattern\Building\Program;
use App\PrototypePattern\Building\Wall;
use App\PrototypePattern\Building\Building;

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
    public function Given_StrawWall_When_GetFirstBuilding_Then_ReturnStrawBuilding()
    {
        $strawWall = new Wall('straw');
        $expected = new Building($strawWall, 'oldestPigHouse');

        $actual = $this->sut->getFirstBuilding();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function Given_StrawBuilding_When_Copy_Then_ReturnAnotherBuilding()
    {
        $strawWall = new Wall('straw');
        $expected = new Building($strawWall, 'oldestPigHouse');

        $actual = $this->sut->getSecondBuilding();

        $this->assertNotEquals($expected, $actual);
    }
}
