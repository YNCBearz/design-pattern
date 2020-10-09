<?php

namespace App\DecoratePattern\Burger\Decorator;

use App\DecoratePattern\Burger\Contracts\Food;
use App\DecoratePattern\Burger\ConcreteComponent\Burger;
use ReflectionClass;

abstract class Ingredient implements Food
{
    /**
     * @var Food
     */
    protected $food;

    protected $name = '配料';

    public function __construct(Food $food)
    {
        $this->food = $food;
    }

    public function getDescription()
    {
        return $this->food->getDescription() . $this->name . '、';
    }

    /**
     * 讓最後一個裝飾者客製化自己外，也能客製化先前的裝飾者
     *
     * @param array $demand
     * @return food
     */
    public function customize($demand)
    {
        $this->changeDefaultIfDemanded($demand);

        if ($this->food instanceof Ingredient) {
            $this->food->customize($demand);
        }

        return $this;
    }

    /**
     * @param array $demand
     */
    protected function changeDefaultIfDemanded($demand)
    {
        $reflectionClass = new ReflectionClass($this);
        $option = strtolower($reflectionClass->getShortName());

        if (isset($demand[$option])) {
            $this->$option = $demand[$option];
        }
    }
}
