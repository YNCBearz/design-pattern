<?php

namespace App\TemplateMethodPattern\Video;

use App\TemplateMethodPattern\Video\UnboxVideo;

class Program
{
    public function makeUnboxVideo()
    {
        // $unboxVideo = new UnboxVideo();
        // return $unboxVideo->make();
        return '選擇開箱項目、拍攝、剪輯出個人開箱的風格、上傳影片';
    }

    public function makeTutorialVideo()
    {
        return '設計教學內容、拍攝、剪輯出個人教學的風格、上傳影片';
    }

    public function makeStoryVideo()
    {
        return '選擇故事主題、拍攝、剪輯出個人說故事的風格、上傳影片';
    }
}
