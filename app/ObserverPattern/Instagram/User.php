<?php

namespace App\ObserverPattern\Instagram;

use App\ObserverPattern\Instagram\Observer;

class User extends Observer
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update()
    {
        echo "通知：貼文有新訊息 \n";
    }
}
