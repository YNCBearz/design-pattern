<?php

namespace App\MediatorPattern\SayHello;

class Program
{

    /**
     * @param string $item
     * @return string
     */
    public function see($item)
    {
        switch ($item) {
            case '認識的人':
                return $this->sayHello();
                break;

            case '熟識的人':
                return $this->waveHand();
                break;
        }
    }

    /**
     * @param string $item
     * @return string
     */
    public function hear($item)
    {
        switch ($item) {
            case '喜歡的人':
                return $this->blush();
                break;

            case '討厭的人':
                return $this->pretendToLookBusy();
                break;
        }
    }

    private function sayHello()
    {
        return '[嘴巴]發出[你好]的聲音';
    }

    private function waveHand()
    {
        return '[手]做出[揮手]的動作';
    }

    private function blush()
    {
        return '[臉]開始[發紅]';
    }

    private function pretendToLookBusy()
    {
        return '[手]做出[裝忙]的動作';
    }
}
