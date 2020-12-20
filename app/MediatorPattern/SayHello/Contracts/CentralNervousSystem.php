<?php

namespace App\MediatorPattern\SayHello\Contracts;

use App\MediatorPattern\SayHello\Contracts\Organ;

interface CentralNervousSystem
{
    /**
     * @param string $organName
     * @param string $message
     * @return string
     */
    public function sendMessage($organName, $message);
}
