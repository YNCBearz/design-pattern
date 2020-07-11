<?php

namespace App\DecoratePattern\Burger\Decorator;

class Pickle extends Stuffing
{
    protected $name = '酸菜';

    protected $pickle = 'normal';

    public function getDescription()
    {
        if ($this->pickle == 'none') {
            return $this->stuffing->getDescription();
        }

        return parent::getDescription();
    }
}
