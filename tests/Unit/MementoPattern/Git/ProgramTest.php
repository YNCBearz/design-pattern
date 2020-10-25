<?php

namespace Tests\Unit\MementoPattern\Git;

use App\MementoPattern\Git\Program;
use PHPUnit\Framework\TestCase;

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
     * just for dump, no test
     */
    public function testRun()
    {
        $this->sut->run();
        $this->assertTrue(true);
    }
}
