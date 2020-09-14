<?php

namespace App\ObserverPattern\Instagram;

use App\ObserverPattern\Instagram\Observer;

abstract class Subject
{
    /**
     * @var array
     */
    protected $observers = [];

    public function getObservers()
    {
        return $this->observers;
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }
}
