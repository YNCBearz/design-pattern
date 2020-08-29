<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern\Payment;

use App\FactoryPattern\Transport\SimpleFactoryPattern\Contracts\Payable;

class RailWayCashPayment implements Payable
{
    public function pay()
    {
        return '鐵路：現金付款';
    }
}
