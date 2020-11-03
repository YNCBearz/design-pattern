<?php

namespace Tests\Feature\InterpreterPattern\MorseCode;

use PHPUnit\Framework\TestCase;
use App\InterpreterPattern\MorseCode\Program;
use App\InterpreterPattern\MorseCode\Context;

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

    public function textProvider(): array
    {
        return [
            ['Hello World', '.... . .-.. .-.. --- / .-- --- .-. .-.. -..'],
            ['Good Morning', '--. --- --- -.. / -- --- .-. -. .. -. --.'],
            ["I'm Bear.", '.. .----. -- / -... . .- .-. .-.-.-']
        ];
    }
}
