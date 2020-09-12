<?php

namespace App\FactoryPattern\Pizza\Contracts;

interface PizzaInterface
{
    public function prepare();

    public function bake();

    public function cut();

    public function box();
}