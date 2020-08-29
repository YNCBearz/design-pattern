<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern;

use App\FactoryPattern\Transport\SimpleFactoryPattern\Contracts\PaymentFactoryInterface;
use App\FactoryPattern\Transport\SimpleFactoryPattern\Contracts\Payable;
use App\FactoryPattern\Transport\SimpleFactoryPattern\Payment\RailWayCashPayment;
use App\FactoryPattern\Transport\SimpleFactoryPattern\Payment\RailWayCreditCardPayment;

class RailWayPaymentFactory implements PaymentFactoryInterface
{
    /**
     * @param string $method (cash, creditCard)
     * @return Payable
     */
    public function createPayment($method): Payable
    {
        switch ($method) {
            case 'cash':
                return new RailWayCashPayment();
                break;

            case 'creditCard':
                return new RailWayCreditCardPayment();
                break;
        }
    }
}
