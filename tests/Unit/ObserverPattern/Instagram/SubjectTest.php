<?php

namespace Tests\Unit\ObserverPattern\Instagram;

use PHPUnit\Framework\TestCase;
use App\ObserverPattern\Instagram\Subject;
use App\ObserverPattern\Instagram\Observer;
use ReflectionClass;

class SubjectTest extends TestCase
{
    /**
     * @var Subject
     */
    protected $sut;

    protected function setUp(): void
    {
        // $this->sut = $this->getMockForAbstractClass(Subject::class);
        $reflectionClass = new ReflectionClass(Subject::class);
        $this->sut = $reflectionClass->newInstance();
    }

    public function testAttachObserver()
    {
        $stubObserver = $this->createStub(Observer::class);
        dump($this->sut);
        $this->sut->attach($stubObserver);
        $this->assertContains($stubObserver, $this->sut->getObservers());
    }

    // public function testDetachObserver()
    // {
    //     $stubObserver = $this->createStub(Observer::class);
    //     $this->sut->observers = [$stubObserver];
    // }
}
