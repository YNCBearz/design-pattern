<?php

namespace App\InterpreterPattern\MorseCode;

class Context
{
    /**
     * @var string
     */
    public $text;

    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
