<?php
namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Pizza\Contracts\AbstractPizza;

class ClamPizza extends AbstractPizza
{
    public $name = '蛤蜊披薩';
}