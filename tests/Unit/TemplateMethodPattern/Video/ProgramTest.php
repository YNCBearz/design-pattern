<?php

namespace Tests\Unit\TemplateMethodPattern\Video;

use PHPUnit\Framework\TestCase;
use App\TemplateMethodPattern\Video\Program;

class ProgramTest extends TestCase
{
    /**
     * @var Program
     */
    protected $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new Program();
    }

    public function testMakeUnboxVideo()
    {
        $expected = '選擇開箱項目、拍攝、剪輯出個人開箱的風格、上傳影片';

        $actual = $this->sut->makeUnboxVideo();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeTutorialVideo()
    {
        $expected = '設計教學內容、拍攝、剪輯出個人教學的風格、上傳影片';

        $actual = $this->sut->makeTutorialVideo();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeStoryVideo()
    {
        $expected = '選擇故事主題、拍攝、剪輯出個人說故事的風格、上傳影片';

        $actual = $this->sut->makeStoryVideo();
        $this->assertEquals($expected, $actual);
    }
}
