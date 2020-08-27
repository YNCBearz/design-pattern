<?php

namespace App\StrategyPattern\CashRegister;

use App\StrategyPattern\CashRegister\Contracts\Receiptable;

class ElectronicReceipt implements Receiptable
{
    public function getReceipt()
    {
        return '電子發票';
    }
}
