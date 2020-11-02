<?php

namespace Tests\Unit\InterpreterPattern\MorseCode;

use PHPUnit\Framework\TestCase;
use App\InterpreterPattern\MorseCode\NonTerminalExpression;

class NonTerminalExpressionTest extends TestCase
{
    /**
     * @var NonTerminalExpression
     */
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new NonTerminalExpression();
    }

    /**
     * @test
     */
    public function Given_One_Space_With_Word_When_Interpret_Then_Return_Tail_And_Output()
    {
        $context = ' bear';

        $expected = 'bear';
        $output = '/';

        $actual = $this->sut->interpret($context);

        $this->expectOutputString($output);
        $this->assertEquals($expected, $actual);
    }
}
