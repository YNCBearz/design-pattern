<?php

namespace App\InterpreterPattern\MorseCode;

use App\InterpreterPattern\MorseCode\Contracts\Expression;
use App\InterpreterPattern\MorseCode\Context;

class NonTerminalExpression implements Expression
{
    public function interpret(Context $context): Context
    {
        $head = ' ';
        $context->text = trim($context->text);

        $this->execute($head);
        return $context;
    }

    /**
     * @param string $message
     */
    public function execute(string $message)
    {
        echo ' / ';
    }

    /**
     * @param string $character
     * @return boolean
     */
    public function isSpace(string $character)
    {
        return $character == ' ';
    }
}
