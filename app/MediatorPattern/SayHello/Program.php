<?php

namespace App\MediatorPattern\SayHello;

class Program
{
    public function sayHello()
    {
        //看到認識的人
        return '[嘴巴]發出[你好]的聲音';
    }

    public function waveHand()
    {
        //看到熟識的人
        return '[手]做出[揮手]的動作';
    }

    public function blush()
    {
        //看到喜歡的人
        return '[臉]開始[發紅]';
    }
}
