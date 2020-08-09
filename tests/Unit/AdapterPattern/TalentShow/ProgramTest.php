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

    public function testRun()
    {
        $expected = ['鋼琴演奏', '講笑話'];
        $actual = $this->sut->run();
        $this->assertEquals($expected, $actual);
    }
}
