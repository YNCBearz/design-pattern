<?php

namespace App\MediatorPattern\SayHello;

use App\MediatorPattern\SayHello\Abstracts\Organ;

class Mouth extends Organ
{
    /**
     * @var string
     */
    protected $name = '嘴巴';

    /**
     * @param string $message
     * @return string
     */
    public function execute($message)
    {
        return "[嘴巴]發出[$message]的聲音";
    }
}
