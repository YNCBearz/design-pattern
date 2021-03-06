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
            'day' => 1,
            'transport' => 'High Speed Rail',
        ];

        $actual = $this->sut->getDomesticTravel();
        $this->assertEquals($expected, $actual);
    }

    public function testGetInternationalTravel()
    {
        $expected = [
            'from' => 'Kaohsiung',
            'to' => 'Tokyo',
            'day' => 5,
            'transport' => 'Airplane',
            'hotel' => 'Disney Hotel',
        ];

        $actual = $this->sut->getInternationalTravel();
        $this->assertEquals($expected, $actual);
    }
}
