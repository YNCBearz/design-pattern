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

    /**
     * @test
     */
    public function Given_A_Bear_When_Interpter_Then_Return_Tail_And_Output()
    {
        $context = new Context('a bear');

        $expected = new Context(' bear');
        $output = '.-';

        $actual = $this->sut->interpret($context);

        $this->expectOutputString($output);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @dataProvider morseCodeCharacterProvider
     */
    public function Given_Character_When_Execute_Then_Output($character, $output)
    {
        $this->sut->execute($character);
        $this->expectOutputString($output);
    }

    public function morseCodeCharacterProvider(): array
    {
        return [
            ['a', '.-'],
            ['b', '-...'],
            ['c', '-.-.'],
            ['d', '-..'],
            ['e', '.'],
            ['f', '..-.'],
            ['g', '--.'],
            ['h', '....'],
            ['i', '..'],
            ['j', '.---'],
            ['k', '-.-'],
            ['l', '.-..'],
            ['m', '--'],
            ['n', '-.'],
            ['o', '---'],
            ['p', '.--.'],
            ['q', '--.-'],
            ['r', '.-.'],
            ['s', '...'],
            ['t', '-'],
            ['u', '..-'],
            ['v', '...-'],
            ['w', '.--'],
            ['x', '-..-'],
            ['y', '-.--'],
            ['z', '--..']
        ];
    }
}
