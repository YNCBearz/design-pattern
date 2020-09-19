<?php

namespace Tests\Unit\ObserverPattern\LineGroup;

use PHPUnit\Framework\TestCase;
use App\ObserverPattern\LineGroup\Program;

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
     * NO TEST
     */
    public function testRun()
    {
        $this->sut->run();
        $this->assertTrue(true);
    }
}
