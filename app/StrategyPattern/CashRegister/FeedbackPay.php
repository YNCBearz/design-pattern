<?php

namespace App\StrategyPattern\CashRegister;

use App\StrategyPattern\CashRegister\Contracts\Payable;

class FeedbackPay implements Payable
{
    /**
     * @var int
     */
    private $originalPrice;

    /**
     * @var int
     */
    private $priceCondition;

    /**
     * @var int
     */
    private $feedback;

    public function __construct($originalPrice, $priceCondition, $feedback)
    {
        $this->originalPrice = $originalPrice;
        $this->priceCondition = $priceCondition;
        $this->feedback = $feedback;
    }

    public function pay()
    {
        $originalPrice = $this->originalPrice;
        $priceCondition = $this->priceCondition;
        $feedback = $this->feedback;

        if ($originalPrice >= $priceCondition) {
            return $originalPrice - floor($originalPrice / $priceCondition) * $feedback;
        }

        return $originalPrice;
    }
}
