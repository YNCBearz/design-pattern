<?php

namespace App\ObserverPattern\Line;

use App\ObserverPattern\Line\Observer;

class User extends Observer
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update()
    {
    }
}
