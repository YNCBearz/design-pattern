<?php

namespace App\TemplateMethodPattern\Video;

use App\TemplateMethodPattern\Video\BasicVideo;

class UnboxVideo extends BasicVideo
{
    protected function generateIdeas()
    {
        return '選擇開箱項目';
    }

    protected function editing()
    {
        return '剪輯出個人開箱的風格';
    }
}
