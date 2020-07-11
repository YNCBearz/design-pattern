<?php

namespace App\DecoratePattern\Burger\Decorator;

use App\DecoratePattern\Burger\Burger as BaseStuffing;

abstract class Stuffing extends BaseStuffing
{
    /**
     * @var BaseStuffing
     */
    protected $stuffing;

    protected $name = '配料';

    public function __construct(BaseStuffing $stuffing)
    {
        $this->stuffing = $stuffing;
    }

    public function getDescription()
    {
        return $this->stuffing->getDescription() . $this->name . '、';
    }
}
