<?php

namespace App\TemplateMethodPattern\Video;

class Program
{
    public function makeUnboxVideo()
    {
        return "
            選擇開箱項目 \n
            拍攝 \n
            剪輯出個人開箱的風格 \n
            上傳影片 \n
        ";
    }

    public function makeTutorialVideo()
    {
        return "
            設計教學內容 \n
            拍攝 \n
            剪輯出個人教學的風格 \n
            上傳影片 \n
        ";
    }

    public function makeStoryVideo()
    {
        return "
            選擇故事主題 \n
            拍攝 \n
            剪輯出個人說故事的風格 \n
            上傳影片 \n
        ";
    }
}
