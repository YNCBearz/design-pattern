<?php

namespace App\MediatorPattern\SayHello\Contracts;

interface CentralNervousSystem
{
    /**
     * @param string $organName
     * @param string $message
     * @return string
     */
    public function sendMessage($organName, $message);
}
