<?php

namespace App\FactoryPattern\Calculator\Operation;

use App\FactoryPattern\Calculator\Contracts\Operable;

class AddOperation implements Operable
{
    public $firstNumber;
    public $secondNumber;

    public function execute()
    {
        return $this->firstNumber + $this->secondNumber;
    }
}
