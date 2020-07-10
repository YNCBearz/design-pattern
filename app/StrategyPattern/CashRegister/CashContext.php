<?php

namespace App\StrategyPattern\CashRegister;

use App\StrategyPattern\CashRegister\NormalPay;
use App\StrategyPattern\CashRegister\FeedbackPay;
use App\StrategyPattern\CashRegister\NormalReceipt;
use App\StrategyPattern\CashRegister\OffPercentPay;
use App\StrategyPattern\CashRegister\Contracts\Payable;
use App\StrategyPattern\CashRegister\ElectronicReceipt;
use App\StrategyPattern\CashRegister\Contracts\Receiptable;

class CashContext
{
    /**
     * @var Payable
     */
    private $discountMethod;

    /**
     * @var Receiptable
     */
    private $receipt;

    /**
     * @param int $originalPrice
     * @param string $discountType
     * @param string $receiptType
     */
    public function __construct($originalPrice, $discountType, $receiptType)
    {
        $this->resolveDiscountMethod($originalPrice, $discountType);
        $this->resolveReceiptType($receiptType);
    }

    /**
     * @param int $originalPrice
     * @param string $discountType
     */
    private function resolveDiscountMethod($originalPrice, $discountType)
    {
        switch ($discountType) {
            case '20% off':
                $this->discountMethod = new OffPercentPay($originalPrice, 0.2);
                break;

            case 'spend_300_feedback_100':
                $this->discountMethod = new FeedbackPay($originalPrice, 300, 100);
                break;

            default:
                $this->discountMethod = new NormalPay($originalPrice);
                break;
        }
    }

    /**
     * @param string $receiptType
     */
    private function resolveReceiptType($receiptType)
    {
        switch ($receiptType) {
            case 'electronicReceipt':
                $this->receipt = new ElectronicReceipt();
                break;

            default:
                $this->receipt = new NormalReceipt();
                break;
        }
    }

    public function pay()
    {
        return $this->discountMethod->pay();
    }

    public function getReceipt()
    {
        return $this->receipt->getReceipt();
    }
}
