<?php

namespace App\MediatorPattern\SayHello\Abstracts;

use App\MediatorPattern\SayHello\Contracts\Executable;
use App\MediatorPattern\SayHello\Brain;

abstract class Organ implements Executable
{
    /**
     * @var string
     */
    protected $name = 'Unknown';

    /**
     * @var Brain
     */
    protected $brain;

    public function __construct(Brain $brain)
    {
        $this->brain = $brain;
    }


    public function getName()
    {
        return $this->name;
    }
}
