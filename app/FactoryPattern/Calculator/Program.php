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
        return $this->firstNumber + $this->secondNumber;
    }
}
