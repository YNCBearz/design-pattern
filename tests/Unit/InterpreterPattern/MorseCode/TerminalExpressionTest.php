<?php

namespace Tests\Unit\InterpreterPattern\MorseCode;

use PHPUnit\Framework\TestCase;
use App\InterpreterPattern\MorseCode\TerminalExpression;
use App\InterpreterPattern\MorseCode\Context;

class TerminalExpressionTest extends TestCase
{
    /**
     * @var TerminalExpression
     */
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new TerminalExpression();
    }

    /**
     * @test
     */
    public function Given_Bear_When_Interpter_Then_Return_Tail_And_Output()
    {
        $context = new Context('bear');

        $expected = new Context('');
        $output = '-... . .- .-.';

        $actual = $this->sut->interpret($context);

        $this->expectOutputString($output);
        $this->assertEquals($expected, $actual);
    }
}
