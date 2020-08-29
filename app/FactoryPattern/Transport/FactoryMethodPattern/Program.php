<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern;

class Program
{
    /**
     * @param string $payment (creditCard, cash)
     * @return string
     */
    public function pay($payment)
    {
        return '高速鐵路：信用卡付款';
    }
}
