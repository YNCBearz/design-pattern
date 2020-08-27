<?php

namespace App\TemplateMethodPattern\Video;

abstract class BasicVideo
{
    public function make()
    {
        return $this->generateIdeas() . '、' .
            $this->shoot() . '、' .
            $this->editing() . '、' .
            $this->upload();
    }

    protected function shoot()
    {
        return '拍攝';
    }

    protected function upload()
    {
        return '上傳影片';
    }

    abstract protected function generateIdeas();

    abstract protected function editing();
}
