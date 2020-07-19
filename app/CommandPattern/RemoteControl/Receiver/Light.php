<?php
namespace App\CommandPattern\RemoteControl\Receiver;

class Light
{
    public function on()
    {
        echo "燈亮了 \n";
    }

    public function off()
    {
        echo "燈暗了 \n";
    }
}