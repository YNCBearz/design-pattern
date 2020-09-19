<?php

namespace App\ObserverPattern\LineGroup;

use App\ObserverPattern\LineGroup\Subject;
use App\ObserverPattern\LineGroup\User;

class Program extends Subject
{
    protected $state = 'nothing new';

    public function run()
    {
        //Bear加入群組
        $bear = new User('Bear');
        $this->attachObserver($bear);

        //通知群組
        $this->notifyObservers();

        //Jane加入群組
        $jane = new User('Jane');
        $this->attachObserver($jane);

        //通知群組
        $this->notifyObservers();

        //有新訊息，通知群組
        $this->state = 'new message';
        $this->notifyObservers();
        $this->state = 'nothing new';

        //Jane離開群組
        $this->detachObserver($jane);

        //通知群組
        $this->notifyObservers();
    }
}
