<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern\Payment;

use App\FactoryPattern\Transport\SimpleFactoryPattern\Contracts\Payable;

class RailWayCreditCardPayment implements Payable
{
    public function pay()
    {
        return '鐵路：信用卡付款';
    }
}
