<?php

namespace App\DecoratePattern\Burger;

class Program
{
    /**
     * @param string $burger_type
     * @return string
     */
    public function makeBurger($burger_type)
    {
        return '麵包、肉、生菜、沙拉、麵包、肉、起司、生菜、沙拉、麵包';
    }
}
