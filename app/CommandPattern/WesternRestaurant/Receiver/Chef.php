<?php

namespace App\CommandPattern\WesternRestaurant\Receiver;

abstract class Chef
{
    /**
     * @return string
     */
    public function cookFiletMignon()
    {
        return '菲力牛排';
    }

    /**
     * @return string
     */
    public function cookSirloinSteak()
    {
        return '沙朗牛排';
    }
}
