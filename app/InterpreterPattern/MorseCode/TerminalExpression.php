<?php

namespace App\InterpreterPattern\MorseCode;

use App\InterpreterPattern\MorseCode\Abstracts\Expression;

class TerminalExpression extends Expression
{
    /**
     * @param string $message
     */
    public function execute(string $message)
    {
        $characters = str_split($message);

        foreach ($characters as $key => $character) {
            $this->encode($character);

            if ($key == array_key_last($characters)) {
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
