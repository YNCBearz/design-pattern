<?php

namespace App\FactoryPattern\Transport\FactoryMethodPattern;

class Program
{
    /**
     * @param string $method (creditCard, cash)
     * @return string
     */
    public function payRailWayFee($method)
    {
        switch ($method) {
            case 'cash':
                return '鐵路：現金付款';
                break;

            case 'creditCard':
                return '鐵路：信用卡付款';
                break;
        }
    }
}
