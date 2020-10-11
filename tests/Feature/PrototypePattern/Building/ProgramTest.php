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
    public function Given_ThreePig_When_Build_Then_ReturnThreeHouse()
    {
        $strawWall = new Wall('straw');
        $woodWall = new Wall('wood');
        $bricksWall = new Wall('bricks');

        $firstBuilding = new Building($strawWall, 'oldestPigHouse');
        $secondBuilding = new Building($woodWall, 'middlePigHouse');
        $thirdBuilding = new Building($bricksWall, 'youngestPigHouse');

        $expected = [
            'firstBuilding' => $firstBuilding,
            'secondBuilding' => $secondBuilding,
            'thirdBuilding' => $thirdBuilding
        ];

        $actual = $this->sut->run();

        $this->assertEquals($expected, $actual);
    }
}
