<?php

namespace App\DecoratePattern\Burger\Decorator;

class Cheese extends Stuffing
{
    protected $name = '起司';

    protected $cheese = 'normal';

    public function getDescription()
    {
        if ($this->cheese == 'double') {
            return $this->stuffing->getDescription() . '兩倍' . $this->name . '、';
        }

        return parent::getDescription();
    }
}
