<?php

namespace App\InterpreterPattern\MorseCode;

use App\InterpreterPattern\MorseCode\Contracts\Expression;
use App\InterpreterPattern\MorseCode\Context;

class TerminalExpression implements Expression
{
    protected $mapping = [
        'a' => '.-',
        'b' => '-...',
        'c' => '-.-.',
        'd' => '-..',
        'e' => '.',
        'f' => '..-.',
        'g' => '--.',
        'h' => '....',
        'i' => '..',
        'j' => '.---',
        'k' => '-.-',
        'l' => '.-..',
        'm' => '--',
        'n' => '-.',
        'o' => '---',
        'p' => '.--.',
        'q' => '--.-',
        'r' => '.-.',
        's' => '...',
        't' => '-',
        'u' => '..-',
        'v' => '...-',
        'w' => '.--',
        'x' => '-..-',
        'y' => '-.--',
        'z' => '--..',
        '0' => '-----',
        '1' => '.----',
        '2' => '..---',
        '3' => '...--',
        '4' => '....-',
        '5' => '.....',
        '6' => '-....',
        '7' => '--...',
        '8' => '---..',
        '9' => '----.',
        '.' => '.-.-.-',
        ',' => '--..--',
        '?' => '..--..',
        '/' => '-..-.',
        "'" => '.----.',
        '!' => '-.-.--',
    ];


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
        echo $this->mapping[$character];
    }

    private function typeSpace()
    {
        echo ' ';
    }
}
