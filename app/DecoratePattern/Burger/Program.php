<?php

namespace App\DecoratePattern\Burger;

class Program
{
    protected $sauce = 'normal';

    protected $cheese = 'normal';

    /**
     * @param array $demand
     */
    public function customize($demand)
    {
        foreach ($demand as $option => $value) {
            $this->$option = $value;
        }
    }

    /**
     * @return string
     */
    public function makeBigMac()
    {
        if ($this->sauce == 'none') {
            return '麵包、肉、生菜、麵包、肉、起司、生菜、麵包';
        }

        if ($this->cheese == 'double') {
            return '麵包、肉、生菜、沙拉、麵包、肉、起司、起司、生菜、沙拉、麵包';
        }

        return '麵包、肉、生菜、沙拉、麵包、肉、起司、生菜、沙拉、麵包';
    }

    public function makeDoubleCheeseBurger()
    {
        return '麵包、酸菜、起司、肉、起司、肉、麵包';
    }
}
