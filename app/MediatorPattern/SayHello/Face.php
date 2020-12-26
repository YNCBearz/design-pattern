<?php

namespace App\MediatorPattern\SayHello;

use App\MediatorPattern\SayHello\Abstracts\Organ;

class Face extends Organ
{
    /**
     * @var string
     */
    protected $name = '臉';

    /**
     * @param string $message
     * @return string
     */
    public function execute($message)
    {
        return "[臉]開始[$message]";
    }
}
