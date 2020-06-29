<?php

namespace App\StrategyPattern\CashRegister;

use App\StrategyPattern\CashRegister\NormalPay;
use App\StrategyPattern\CashRegister\NormalReceipt;
use App\StrategyPattern\CashRegister\Contracts\Payable;
use App\StrategyPattern\CashRegister\Contracts\Receiptable;

class CashContext
{
    /**
     * @var Payable
     */
    private $promotionMethod;

    /**
     * @var Receiptable
     */
    private $receiptMethod;

    /**
     * @param string $promotion
     * @param int $originalPrice
     * @param string $receiptType
     */
    public function __construct($originalPrice, $promotion, $receiptType)
    {
        $this->resolvePromotionMethod($originalPrice, $promotion);
        $this->resolveReceiptMethod($receiptType);
    }

    /**
     * @param int $originalPrice
     * @param string $promotion
     */
    private function resolvePromotionMethod($originalPrice, $promotion)
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

    /**
     * @param string $receiptType
     */
    private function resolveReceiptMethod($receiptType)
    {
        switch ($receiptType) {


            default:
                $this->receiptMethod = new NormalReceipt();
                break;
        }
    }

    public function pay()
    {
        return $this->promotionMethod->pay();
    }

    public function getReceipt()
    {
        return $this->receiptMethod->getReceipt();
    }
}
