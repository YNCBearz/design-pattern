<?php

namespace Tests\Feature\InterpreterPattern\MorseCode;

use PHPUnit\Framework\TestCase;
use App\InterpreterPattern\MorseCode\Program;
use App\InterpreterPattern\MorseCode\Context;
use App\InterpreterPattern\MorseCode\Exceptions\UndefinedTextException;

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
     * @param string $context
     * @param string $output
     *
     * @test
     * @dataProvider textProvider
     */
    public function Give_Context_When_Encode_Then_Output(string $text, string $output)
    {
        $this->sut->encode($text);
        $this->expectOutputString($output);
    }

    /**
     * @test
     */
    public function Given_Undefined_Text_When_Encode_Then_Throw_Exception()
    {
        $undefinedText = '❤';

        $this->expectException(UndefinedTextException::class);
        $this->sut->encode($undefinedText);
    }

    public function textProvider(): array
    {
        return [
            ['Hello World', '.... . .-.. .-.. --- / .-- --- .-. .-.. -..'],
            ['Good Morning', '--. --- --- -.. / -- --- .-. -. .. -. --.'],
            ["I'm Bear.", '.. .----. -- / -... . .- .-. .-.-.-'],
            ['what a wonderful world!', '.-- .... .- - / .- / .-- --- -. -.. . .-. ..-. ..- .-.. / .-- --- .-. .-.. -.. -.-.--']
        ];
    }
}
