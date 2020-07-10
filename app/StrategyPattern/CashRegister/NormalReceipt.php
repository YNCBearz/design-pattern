<?php

namespace App\StrategyPattern\CashRegister;

use App\StrategyPattern\CashRegister\Contracts\Receiptable;

class NormalReceipt implements Receiptable
{
    public function getReceipt()
    {
        return '一般發票';
    }
}
