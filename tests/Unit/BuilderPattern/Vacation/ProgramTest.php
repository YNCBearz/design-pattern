<?php

namespace Tests\Unit\BuilderPattern\Vacation;

use PHPUnit\Framework\TestCase;
use App\BuilderPattern\Vacation\Program;

class ProgramTest extends TestCase
{
    /**
     * @var Program
     **/
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Program();
    }

    public function testGetDomesticTravel()
    {
        $expected = [
            'from' => 'Kaohsiung',
            'to' => 'Taipei',
            'days' => 1,
            'travelBy' => 'High Speed Rail',
            'schedule' => 'Taipei 101'
        ];

        $actual = $this->sut->getDomesticTravel();
        $this->assertEquals($expected, $actual);
    }

    public function testGetInternationalTravel()
    {
        $expected = [
            'from' => 'Kaohsiung',
            'to' => 'Tokyo',
            'days' => 5,
            'hotel' => 'Disney Hotel',
            'travelBy' => 'EVA AIR',
            'schedule' => 'Disneyland',
            'touristGuide' => 'Temari'
        ];

        $actual = $this->sut->getInternationalTravel();
        $this->assertEquals($expected, $actual);
    }
}
