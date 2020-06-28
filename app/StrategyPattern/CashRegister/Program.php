<?php

namespace App\StrategyPattern\CashRegister;

class Program
{
    /**
     * @var int
     */
    private $originalPrice;

    /**
     * @var string
     */
    private $promotion;

    public function __construct($originalPrice, $promotion)
    {
        $this->originalPrice = $originalPrice;
        $this->promotion = $promotion;
    }

    public function pay()
    {
        if ($this->promotion == '20% off') {
            return $this->originalPrice * 0.8;
        }

        return $this->originalPrice;
    }
}
