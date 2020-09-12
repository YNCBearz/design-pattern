<?php

namespace App\StrategyPattern\CashRegister;

use App\StrategyPattern\CashRegister\Contracts\Payable;

class NormalPay implements Payable
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
