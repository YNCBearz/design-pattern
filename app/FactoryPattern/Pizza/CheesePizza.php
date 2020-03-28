<?php
namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Pizza\Contracts\AbstractPizza;

class CheesePizza extends AbstractPizza
{
    public $name = '起司披薩';
}