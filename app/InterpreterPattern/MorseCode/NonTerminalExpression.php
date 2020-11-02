<?php

namespace App\InterpreterPattern\MorseCode;

use App\InterpreterPattern\MorseCode\Abstracts\Expression;

class NonTerminalExpression extends Expression
{
    public function execute($key)
    {
        echo '/';
    }
}
