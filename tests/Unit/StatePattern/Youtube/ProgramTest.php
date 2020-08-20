<?php

namespace Tests\Unit\StatePattern\Youtube;

use PHPUnit\Framework\TestCase;
use App\StatePattern\Youtube\Program;

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
     * @test
     */
    public function Given_Guest_When_Register_Then_Member()
    {
        $expected = 'member';

        $this->sut->register();

        $this->assertEquals($expected, $this->sut->getLicense());
    }

    /**
     * @test
     */
    // public function Given_Premium_When_Register_Then_Premium()
    // {
    //     $expected = 'premium';

    //     $this->sut->register();

    //     $this->assertEquals($expected, $this->sut->license);
    // }
}
