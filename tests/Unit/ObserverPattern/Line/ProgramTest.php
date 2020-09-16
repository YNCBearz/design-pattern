<?php

namespace Tests\Unit\ObserverPattern\Line;

use PHPUnit\Framework\TestCase;
use App\ObserverPattern\Instagram\Program;

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
}
