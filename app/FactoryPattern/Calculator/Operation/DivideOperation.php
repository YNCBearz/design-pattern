<?php

namespace App\FactoryPattern\Calculator\Operation;

use App\FactoryPattern\Calculator\Contracts\Operable;

class DivideOperation implements Operable
{
    public $firstNumber;
    public $secondNumber;

    public function execute()
    {
        if ($this->secondNumber === 0) {
            return 'Division by zero';
        }
        return $this->firstNumber / $this->secondNumber;
    }
}
