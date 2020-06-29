<?php

namespace App\StrategyPattern\CashRegister;

use App\StrategyPattern\CashRegister\CashContext;

class Program
{
    /**
     * @var CashContext
     */
    private $cashContext;

    public function __construct($originalPrice, $promotion)
    {
        $this->originalPrice = $originalPrice;
        $this->cashContext = new CashContext($originalPrice, $promotion);
    }

    public function pay()
    {
        return $this->cashContext->pay();
    }
}
