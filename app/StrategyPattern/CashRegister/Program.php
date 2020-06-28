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
        $originalPrice = $this->originalPrice;

        if ($this->promotion == '20% off') {
            return $originalPrice * 0.8;
        }

        if ($this->promotion == 'spend_300_feedback_100') {
            if ($originalPrice >= 300) {
                return $originalPrice - floor($originalPrice / 300) * 100;
            }
        }

        return $originalPrice;
    }
}
