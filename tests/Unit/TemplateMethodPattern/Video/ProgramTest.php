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
        $expected = "
            選擇開箱項目 \n
            拍攝 \n
            剪輯出個人開箱的風格 \n
            上傳影片 \n
        ";

        $actual = $this->sut->makeUnboxVideo();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeTutorialVideo()
    {
        $expected = "
            設計教學內容 \n
            拍攝 \n
            剪輯出個人教學的風格 \n
            上傳影片 \n
        ";

        $actual = $this->sut->makeTutorialVideo();
        $this->assertEquals($expected, $actual);
    }

    public function testMakeStoryVideo()
    {
        $expected = "
            選擇故事主題 \n
            拍攝 \n
            剪輯出個人說故事的風格 \n
            上傳影片 \n
        ";

        $actual = $this->sut->makeStoryVideo();
        $this->assertEquals($expected, $actual);
    }
}
