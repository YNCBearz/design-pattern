<?php
namespace App\FactoryPattern\Pizza\NewYork;

use App\FactoryPattern\Pizza\Contracts\AbstractPizza;

class NYStyleClamPizza extends AbstractPizza
{
    /**
     * @var string $name 披薩名稱
     * @var string $dough 麵團類型
     * @var string $sauce 醬料類型
     * @var array $toppings 佐料
     */
    public $name = '紐約風蛤蜊披薩';
    public $dough = '祖傳麵團';
    public $sauce = '特殊醬料';
    public $toppings = ['龍蝦蟹肉棒'];
}