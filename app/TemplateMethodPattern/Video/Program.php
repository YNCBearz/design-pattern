<?php

namespace App\TemplateMethodPattern\Video;

use App\TemplateMethodPattern\Video\UnboxVideo;

class Program
{
    public function makeUnboxVideo()
    {
        $unboxVideo = new UnboxVideo();
        return $unboxVideo->make();
    }

    public function makeTutorialVideo()
    {
        $tutorialVideo = new TutorialVideo();
        return $tutorialVideo->make();
    }

    public function makeStoryVideo()
    {
        $storyVideo = new StoryVideo();
        return $storyVideo->make();
    }
}
