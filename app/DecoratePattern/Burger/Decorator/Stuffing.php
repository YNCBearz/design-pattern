<?php

namespace App\DecoratePattern\Burger\Decorator;

use App\DecoratePattern\Burger\Burger as BaseStuffing;

abstract class Stuffing extends BaseStuffing
{
    /**
     * @var BaseStuffing
     */
    protected $stuffing;

    protected $sauce = 'normal';
    protected $cheese = 'normal';
    protected $pickle = 'normal';

    protected $name = '配料';

    public function __construct(BaseStuffing $stuffing)
    {
        $this->stuffing = $stuffing;
    }

    public function getDescription()
    {
        return $this->stuffing->getDescription() . $this->name . '、';
    }

    /**
     * @param array $demand
     */
    public function customize($demand)
    {
        if ($this->stuffing instanceof Stuffing) {
            $this->stuffing->customize($demand);
        }

        foreach ($demand as $option => $value) {
            $this->$option = $value;
        }
    }
}
