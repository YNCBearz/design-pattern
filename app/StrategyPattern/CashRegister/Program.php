<?php

namespace App\StrategyPattern\CashRegister;

class Program
{
    /**
     * @var int
     */
    private $originalPrice;

    public function __construct($originalPrice)
    {
        $this->originalPrice = $originalPrice;
    }

    public function pay()
    {
        return $this->originalPrice;
    }
}
