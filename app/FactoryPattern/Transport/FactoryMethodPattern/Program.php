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
        switch ($payment) {
            case 'cash':
                return '高速鐵路：現金付款';
                break;

            case 'creditCard':
                return '高速鐵路：信用卡付款';
                break;
        }
    }
}
