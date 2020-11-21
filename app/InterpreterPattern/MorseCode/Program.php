<?php

namespace App\InterpreterPattern\MorseCode;

use App\InterpreterPattern\MorseCode\NonTerminalExpression;
use App\InterpreterPattern\MorseCode\TerminalExpression;
use App\InterpreterPattern\MorseCode\Context;

class Program
{
    /**
     * @var TerminalExpression
     */
    protected $terminalExpression;

    /**
     * @var NonTerminalExpression
     */
    protected $nonTerminalExpression;

    public function __construct()
    {
        $this->terminalExpression = new TerminalExpression();
        $this->nonTerminalExpression = new NonTerminalExpression();
    }

    /**
     * @param string $text
     */
    public function encode(string $text)
    {
        try {
            $context = new Context(trim($text));

            while (strlen($context->text) > 0) {
                $firstCharacter = substr($context->text, 0, 1);

                if ($this->nonTerminalExpression->isSpace($firstCharacter)) {
                    $context = $this->nonTerminalExpression->interpret($context);
                    continue;
                }

                $context = $this->terminalExpression->interpret($context);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
