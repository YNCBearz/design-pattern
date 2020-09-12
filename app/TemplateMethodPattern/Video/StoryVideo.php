<?php

namespace App\TemplateMethodPattern\Video;

use App\TemplateMethodPattern\Video\BasicVideo;

class StoryVideo extends BasicVideo
{
    protected function generateIdeas()
    {
        return '選擇故事主題';
    }

    protected function editing()
    {
        return '剪輯出個人說故事的風格';
    }
}
