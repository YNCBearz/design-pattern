<?php

namespace App\MediatorPattern\SayHello\Abstracts;

use App\MediatorPattern\SayHello\Contracts\Executable;

abstract class Organ implements Executable
{
    /**
     * @var string
     */
    protected $name = 'Unknown';

    public function getName()
    {
        return $this->name;
    }
}
