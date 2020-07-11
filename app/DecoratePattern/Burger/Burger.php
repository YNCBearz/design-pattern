<?php

namespace App\DecoratePattern\Burger;

abstract class Burger
{
    protected $sauce = 'normal';
    protected $cheese = 'normal';
    protected $pickle = 'normal';

    protected $name = '未知品項';

    /**
     * @param array $demand
     */
    public function customize($demand)
    {
        foreach ($demand as $option => $value) {
            $this->$option = $value;
        }
    }

    abstract public function getDescription();
}
