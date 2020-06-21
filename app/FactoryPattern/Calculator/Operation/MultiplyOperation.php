<?php

namespace App\FactoryPattern\Calculator\Operation;

use App\FactoryPattern\Calculator\Contracts\Operable;

class MultiplyOperation implements Operable
{
    public $firstNumber;
    public $secondNumber;

    public function run()
    {
        return $this->firstNumber * $this->secondNumber;
    }
}
