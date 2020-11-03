<?php

namespace App\InterpreterPattern\MorseCode;

use App\InterpreterPattern\MorseCode\Contracts\Expression;
use App\InterpreterPattern\MorseCode\Context;

class TerminalExpression implements Expression
{
    public function interpret(Context $context): Context
    {
        $firstSpacePos = strpos($context->text, ' ');

        if ($firstSpacePos) {
            $head = substr($context->text, 0, $firstSpacePos);
            $context->text = substr($context->text, $firstSpacePos);
        } else {
            $head = $context->text;
            $context->text = '';
        }

        $this->execute($head);
        return $context;
    }

    /**
     * @param string $message
     */
    public function execute(string $message)
    {
        $characters = str_split($message);
        $lastKey = array_key_last($characters);

        foreach ($characters as $key => $character) {
            $this->encode($character);

            if ($key == $lastKey) {
                break;
            }

            $this->typeSpace();
        }
    }

    /**
     * @param string $character
     */
    private function encode(string $character)
    {
        $character = strtolower($character);

        switch ($character) {
            case 'a':
                echo '.-';
                break;

            case 'b':
                echo '-...';
                break;

            case 'c':
                echo '-.-.';
                break;

            case 'e':
                echo '.';
                break;

            case 'r':
                echo '.-.';
                break;
        }
    }

    private function typeSpace()
    {
        echo ' ';
    }
}
