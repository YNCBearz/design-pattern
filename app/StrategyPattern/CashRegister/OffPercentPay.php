<?php

namespace App\StrategyPattern\CashRegister;

use App\StrategyPattern\CashRegister\Contracts\Payable;

class OffPercentPay implements Payable
{
    /**
     * @var int
     */
    private $originalPrice;

    /**
     * @var double
     */
    private $offPercent;

    public function __construct($originalPrice, $offPercent)
    {
        $this->originalPrice = $originalPrice;
        $this->offPercent = $offPercent;
    }

    public function pay()
    {
        return $this->originalPrice * (1 - $this->offPercent);
    }
}
