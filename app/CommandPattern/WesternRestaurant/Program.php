<?php

namespace App\CommandPattern\WesternRestaurant;

class Program
{
    /**
     * @param array $order
     * @return array
     */
    public function makeOrder($order)
    {
        $result = [];
        if (in_array('Filet Mignon', $order)) {
            $result[] = '菲力牛排';
        }

        if (in_array('Sirloin Steak', $order)) {
            $result[] = '沙朗牛排';
        }

        return $result;
    }
}
