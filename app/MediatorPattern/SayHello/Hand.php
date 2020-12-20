<?php

namespace App\MediatorPattern\SayHello;

use App\MediatorPattern\SayHello\Abstracts\Organ;

class Hand extends Organ
{
    protected $name = '手';

    /**
     * @param string $message
     * @return string
     */
    public function execute($message)
    {
        return "[手]做出[$message]的動作";
    }
}
