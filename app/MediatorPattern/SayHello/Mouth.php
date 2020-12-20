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
     * @var Brain
     */
    protected $brain;

    public function __construct(Brain $brain)
    {
        $this->brain = $brain;
    }

    /**
     * @param string $message
     * @return string
     */
    public function execute($message)
    {
        return $this->say($message);
    }

    /**
     * @param string $message
     * @return string
     */
    private function say($message)
    {
        return "[嘴巴]發出[$message]的聲音";
    }
}
