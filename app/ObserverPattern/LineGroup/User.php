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
        //使用者手機跳出通知
        //使用者電腦跳出通知
    }
}
