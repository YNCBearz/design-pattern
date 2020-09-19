<?php

namespace App\ObserverPattern\LineGroup;

use App\ObserverPattern\LineGroup\Observer;

class User extends Observer
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update()
    {
        //更新群組訊息
    }
}
