<?php

namespace App\MediatorPattern\SayHello\Contracts;

interface Executable
{
    /**
     * @param string $message
     * @return string
     */
    public function execute($message);
}
