<?php

namespace App\StrategyPattern\CashRegister;

use App\StrategyPattern\CashRegister\NormalPay;
use App\StrategyPattern\CashRegister\Contracts\Payable;

class CashContext
{
    /**
     * @var Payable
     */
    private $promotionMethod;

    /**
     * @param string $promotion
     * @param int $originalPrice
     */
    public function __construct($originalPrice, $promotion)
    {
        switch ($promotion) {
            case '20% off':
                $this->promotionMethod = new OffPercentPay($originalPrice, 0.2);
                break;

            case 'spend_300_feedback_100':
                $this->promotionMethod = new FeedbackPay($originalPrice, 300, 100);
                break;

            default:
                $this->promotionMethod = new NormalPay($originalPrice);
                break;
        }
    }

    public function pay()
    {
        return $this->promotionMethod->pay();
    }
}
