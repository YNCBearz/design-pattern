<?php

namespace Tests\Unit\IteratorPattern\TopSong;

use PHPUnit\Framework\TestCase;
use App\IteratorPattern\TopSong\Program;

class ProgramTest extends TestCase
{

    /**
     * @var Program
     */
    protected $sut;

    protected function setUp(): void
    {
        $songs = $this->getTestSongs();
        $this->sut = new Program($songs);
    }

    private function getTestSongs()
    {
        return [
            ['name' => 'Waiting For You', 'singer' => 'Jay Chou', 'releaseDate' => '2018-01-18'],
            ['name' => 'Light Years Away', 'singer' => 'G.E.M.', 'releaseDate' => '2016-12-30'],
            ['name' => 'Miss You 3000', 'singer' => '831', 'releaseDate' => '2019-11-13']
        ];
    }

    public function testList()
    {
        $expected = ['Waiting For You', 'Light Years Away', 'Miss You 3000'];
        $actual = $this->sut->list();
        $this->assertEquals($expected, $actual);
    }

    public function testListReverse()
    {
        $expected = ['Miss You 3000', 'Light Years Away', 'Waiting For You'];
        $actual = $this->sut->listReverse();
        $this->assertEquals($expected, $actual);
    }
}
