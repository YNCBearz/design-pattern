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
     * @param string $discountType
     * @param string $receiptType
     */
    public function __construct($originalPrice, $discountType, $receiptType)
    {
        $this->originalPrice = $originalPrice;
        $this->cashContext = new CashContext($originalPrice, $discountType, $receiptType);
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
