<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern;

use App\FactoryPattern\Transport\SimpleFactoryPattern\RailWayPaymentFactory;

class Program
{
    /**
     * @param string $method (creditCard, cash)
     * @return string
     */
    public function payRailWayFee($method)
    {
        $paymentFactory = new RailWayPaymentFactory();
        $payment = $paymentFactory->createPayment($method);
        return $payment->pay();
    }
}
