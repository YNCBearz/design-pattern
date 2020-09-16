<?php

namespace App\ObserverPattern\LineGroup;

use App\ObserverPattern\LineGroup\Observer;

abstract class Subject
{
    /**
     * @var array
     */
    protected $observers = [];

    public function attachObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detachObserver(Observer $observer)
    {
        $index = array_search($observer, $this->observers);

        if ($index >= 0) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}
