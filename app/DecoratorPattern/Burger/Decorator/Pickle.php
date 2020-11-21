<?php

namespace App\DecoratorPattern\Burger\Decorator;

use App\DecoratorPattern\Burger\Decorator\Ingredient;

class Pickle extends Ingredient
{
    protected $name = '酸菜';

    protected $pickle = 'normal';

    public function getDescription()
    {
        if ($this->pickle == 'none') {
            return $this->food->getDescription();
        }

        return parent::getDescription();
    }
}
