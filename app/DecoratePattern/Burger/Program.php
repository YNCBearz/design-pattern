<?php

namespace App\DecoratePattern\Burger;

class Program
{
    protected $sauce = 'normal';
    protected $cheese = 'normal';
    protected $pickle = 'normal';

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
            return '大麥克：麵包、牛肉、生菜、麵包、牛肉、起司、生菜、麵包';
        }

        if ($this->cheese == 'double') {
            return '大麥克：麵包、牛肉、生菜、沙拉、麵包、牛肉、起司、起司、生菜、沙拉、麵包';
        }

        return '大麥克：麵包、牛肉、生菜、沙拉、麵包、牛肉、起司、生菜、沙拉、麵包';
    }

    public function makeDoubleCheeseBurger()
    {
        if ($this->pickle == 'none') {
            return '雙層牛肉吉事堡：麵包、起司、牛肉、起司、牛肉、麵包';
        }

        return '雙層牛肉吉事堡：麵包、酸菜、起司、牛肉、起司、牛肉、麵包';
    }
}
