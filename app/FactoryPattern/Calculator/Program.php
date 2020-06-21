<?php

namespace App\FactoryPattern\Calculator;

class Program
{
    /**
     * @var int
     */
    private $firstNumber;

    /**
     * @var int
     */
    private $secondNumber;

    /**
     * @var string
     */
    private $operationString;

    public function __construct($firstNumber, $secondNumber, $operationString)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->operationString = $operationString;
    }

    public function run()
    {
        $operationString = $this->operationString;

        switch ($operationString) {
            case '+':
                return $this->firstNumber + $this->secondNumber;
                break;

            case '-':
                return $this->firstNumber - $this->secondNumber;
                break;

            case "/":
                if ($this->secondNumber === 0) {
                    return 'Division by zero';
                }
                return $this->firstNumber / $this->secondNumber;
                break;
        }
    }
}
