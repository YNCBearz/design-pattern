<?php

namespace Tests\FactoryPattern\Calculator;

use PHPUnit\Framework\TestCase;
use App\FactoryPattern\Calculator\Program;

class ProgramTest extends TestCase
{
    public function testAdd()
    {
        $this->service = new Program(1, 1, '+');
        $this->resultShouldBe(2);
    }

    private function resultShouldBe($expected)
    {
        $actual = $this->service->run();
        $this->assertEquals($expected, $actual);
    }
}
