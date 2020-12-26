<?php

namespace App\MediatorPattern\SayHello;

use App\MediatorPattern\SayHello\Contracts\CentralNervousSystem;
use App\MediatorPattern\SayHello\Abstracts\Organ;

class Brain implements CentralNervousSystem
{
    /**
     * @var Organ[]
     */
    protected $organs = [];

    /**
     * @param string $organName
     * @param string $message
     * @return string
     */
    public function sendMessage($organName, $message)
    {
        $organ = $this->organs[$organName];
        return $organ->execute($message);
    }

    public function setOrgan(Organ $organ)
    {
        $organName = $organ->getName();
        $this->organs[$organName] = $organ;
    }
}
