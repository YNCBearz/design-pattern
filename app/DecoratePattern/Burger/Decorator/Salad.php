<?php

namespace App\DecoratePattern\Burger\Decorator;

class Salad extends Stuffing
{
    protected $name = '沙拉';

    protected $sauce = 'normal';

    public function getDescription()
    {
        if ($this->sauce == 'none') {
            return $this->stuffing->getDescription();
        }

        return parent::getDescription();
    }
}
