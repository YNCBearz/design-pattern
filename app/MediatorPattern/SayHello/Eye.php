<?php

namespace App\MediatorPattern\SayHello;

use App\MediatorPattern\SayHello\Abstracts\Organ;


class Eye extends Organ
{
    /**
     * @var string
     */
    protected $name = '眼睛';

    /**
     * @param string $message
     * @return string
     */
    public function execute($message)
    {
        switch ($message) {
            case '認識的人':
                return $this->brain->sendMessage('嘴巴', '你好');
                break;

            case '熟識的人':
                return $this->brain->sendMessage('手', '揮手');
                break;
        }
    }
}
