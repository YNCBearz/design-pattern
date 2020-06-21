<?php

namespace App\FactoryPattern\Calculator;

use App\FactoryPattern\Calculator\Contracts\Operable;
use App\FactoryPattern\Calculator\SimpleOperationFactory;

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

    /**
     * @var Operable
     */
    private $operation;

    public function __construct($firstNumber, $secondNumber, $operationString)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->operationString = $operationString;
    }

    public function run()
    {
        $simpleOperationFactory = new SimpleOperationFactory();
        $this->operation = $simpleOperationFactory->create($this->operationString);

        return $this->execute();
    }

    /**
     * @return int|string
     */
    private function execute()
    {
        $this->operation->firstNumber = $this->firstNumber;
        $this->operation->secondNumber = $this->secondNumber;
        return $this->operation->run();
    }
}
