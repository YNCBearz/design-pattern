<?php

namespace App\StrategyPattern\CashRegister;

use App\StrategyPattern\CashRegister\CashContext;

class Program
{
    /**
     * @var CashContext
     */
    private $cashContext;

    /**
     * @param int $originalPrice
     * @param string $promotion
     * @param string $receiptType
     */
    public function __construct($originalPrice, $promotion, $receiptType = 'normal')
    {
        $this->originalPrice = $originalPrice;
        $this->cashContext = new CashContext($originalPrice, $promotion, $receiptType);
    }

    public function pay()
    {
        return $this->cashContext->pay();
    }

    public function getReceipt()
    {
        return $this->cashContext->getReceipt();
    }
}
