<?php

namespace Tests\Unit\ObserverPattern\Instagram;

use PHPUnit\Framework\TestCase;
use App\ObserverPattern\Instagram\Program;

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

    public function testNotifyNewReply()
    {
        $this->sut->notifyNewReply();
        $this->assertStringContainsString("通知：貼文有新訊息", $this->getActualOutput());
    }
}
