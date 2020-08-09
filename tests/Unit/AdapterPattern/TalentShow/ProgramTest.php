<?php

namespace Tests\Unit\AdapterPattern\TalentShow;

use PHPUnit\Framework\TestCase;
use App\AdapterPattern\TalentShow\Program;

class ProgramTest extends TestCase
{
    /**
     * @var Program
     */
    protected $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new Program();
    }

    public function testMusicShow()
    {
        $expected = '鋼琴演奏';

        $actual = $this->sut->musicShow();

        $this->assertEquals($expected, $actual);
    }

    public function testJokeShow()
    {
        $expected = '講笑話';

        $actual = $this->sut->jokeShow();

        $this->assertEquals($expected, $actual);
    }
}
