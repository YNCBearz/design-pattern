<?php

namespace App\TemplateMethodPattern\Video;

use App\TemplateMethodPattern\Video\BasicVideo;

class TutorialVideo extends BasicVideo
{
    protected function generateIdeas()
    {
        return '設計教學內容';
    }

    protected function editing()
    {
        return '剪輯出個人教學的風格';
    }
}
