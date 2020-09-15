<?php

namespace Tests\Unit\ObserverPattern\Instagram;

use PHPUnit\Framework\TestCase;
use App\ObserverPattern\Instagram\Subject;
use App\ObserverPattern\Instagram\Observer;
use Tests\Traits\NotPublicPropertyMutatorTrait;

class SubjectTest extends TestCase
{
    use NotPublicPropertyMutatorTrait;

    /**
     * @var Subject
     */
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = $this->getMockForAbstractClass(Subject::class);
    }

    public function testAttachObserver()
    {
        $propertyName = 'observers';
        $this->setProperty($propertyName, []);

        /**
         * @var Observer
         */
        $stubObserver = $this->createStub(Observer::class);
        $expected = [$stubObserver];

        $this->sut->attachObserver($stubObserver);
        $this->assertEquals($expected, $this->getProperty($propertyName));
    }

    public function testDetachObserver()
    {
        $propertyName = 'observers';
        $expected = [];

        /**
         * @var Observer
         */
        $stubObserver = $this->createStub(Observer::class);
        $this->setProperty($propertyName, [$stubObserver]);

        $this->sut->detachObserver($stubObserver);
        $this->assertEquals($expected, $this->getProperty($propertyName));
    }

    public function testNotifyObservers()
    {
        $propertyName = 'observers';
        $mockObserverA = $this->createMock(Observer::class);
        $mockObserverB = $this->createMock(Observer::class);
        $this->setProperty($propertyName, [$mockObserverA, $mockObserverB]);

        $mockObserverA->expects($this->once())
            ->method('update');

        $mockObserverB->expects($this->once())
            ->method('update');

        $this->sut->notifyObservers();
    }
}
