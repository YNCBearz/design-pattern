<?php

namespace App\FactoryPattern\Calculator;

use App\FactoryPattern\Calculator\Contracts\Operable;
use App\FactoryPattern\Calculator\Operation\AddOperation;
use App\FactoryPattern\Calculator\Operation\MinusOperation;
use App\FactoryPattern\Calculator\Operation\DivideOperation;
use App\FactoryPattern\Calculator\Operation\MultiplyOperation;

class SimpleOperationFactory
{
    /**
     * @param string $operationString
     * @return Operable
     */
    public function create($operationString): Operable
    {
        switch ($operationString) {
            case '+':
                return new AddOperation();
                break;

            case '-':
                return new MinusOperation();
                break;

            case '/':
                return new DivideOperation();
                break;

            case '*':
                return new MultiplyOperation();
                break;
        }
    }
}
