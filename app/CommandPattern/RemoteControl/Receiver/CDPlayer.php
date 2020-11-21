<?php
namespace App\CommandPattern\RemoteControl\Receiver;

class CDPlayer
{
    public function setCD()
    {
        echo "設置 CD 片 \n";
    }

    public function removeCD()
    {
        echo "移除 CD 片 \n";
    }

    public function play()
    {
        echo "播放優美的音樂 \n";
    }

    public function stop()
    {
        echo "停止播放 \n";
    }
}