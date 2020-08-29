<?php

namespace App\FactoryPattern\Transport\SimpleFactoryPattern\Contracts;

use App\FactoryPattern\Transport\SimpleFactoryPattern\Contracts\Payable;

interface PaymentFactoryInterface
{
    public function createPayment($method): Payable;
}
