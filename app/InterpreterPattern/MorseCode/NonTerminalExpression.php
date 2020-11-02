<?php

namespace App\InterpreterPattern\MorseCode;

use App\InterpreterPattern\MorseCode\Abstracts\Expression;

class NonTerminalExpression extends Expression
{
    /**
     * @param string $key
     */
    public function execute(string $key)
    {
        echo ' / ';
    }
}
