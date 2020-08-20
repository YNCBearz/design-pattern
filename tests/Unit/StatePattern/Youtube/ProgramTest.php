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
    public function Given_Member_When_Subscribe_Then_Premium()
    {
        $this->sut->setLicense('member');

        $this->sut->subscribe();

        $this->licenseShouldBe('premium');
    }

    /**
     * @test
     */
    public function Given_Guest_When_Subscribe_Then_Throw_Exception()
    {
        $this->expectExceptionMessage('You need to be a member before subscribing.');

        $this->sut->subscribe();
    }

    /**
     * @test
     */
    public function Given_Guest_When_Register_Then_Member()
    {
        $this->sut->register();

        $this->licenseShouldBe('member');
    }

    /**
     * @test
     */
    public function Given_Premium_When_Register_Then_Premium()
    {
        $this->sut->setLicense('premium');

        $this->sut->register();

        $this->licenseShouldBe('premium');
    }

    /**
     * @param string $expected
     */
    private function licenseShouldBe($expected)
    {
        $this->assertEquals($expected, $this->sut->getLicense());
    }
}
