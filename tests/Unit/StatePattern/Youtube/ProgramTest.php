<?php

namespace Tests\Unit\StatePattern\Youtube;

use PHPUnit\Framework\TestCase;
use App\StatePattern\Youtube\Program;
use App\StatePattern\Youtube\State\MemberState;
use App\StatePattern\Youtube\State\PremiumState;

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
    public function Given_Premium_When_CancelSubscription_Then_Member()
    {
        $this->sut->setLicense('premium');

        $this->sut->cancelSubscription();

        $this->licenseShouldBe('member');
    }

    /**
     * @test
     */
    public function Given_Guest_When_CancelSubscription_Then_Throw_Exception()
    {
        $this->expectExceptionMessage('Sorry, you have not subscribed.');

        $this->sut->cancelSubscription();
    }

    /**
     * @test
     */
    public function Given_Premium_When_Subscribe_Then_Premium()
    {
        $this->sut->setLicense('premium');

        $this->sut->subscribe();

        $this->licenseShouldBe('premium');
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

    /**
     * @test
     */
    public function testSetPremiumState()
    {
        $expected = PremiumState::class;

        $this->sut->setPremiumState();

        $this->assertInstanceOf($expected, $this->sut->getState());
    }

    /**
     * @test
     */
    public function testSetMemberState()
    {
        $expected = MemberState::class;

        $this->sut->setMemberState();

        $this->assertInstanceOf($expected, $this->sut->getState());
    }
}
