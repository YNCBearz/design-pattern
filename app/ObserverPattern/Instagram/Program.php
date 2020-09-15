<?php

namespace App\ObserverPattern\Instagram;

use App\ObserverPattern\Instagram\Post;

class Program
{
    public function notifyNewReply()
    {
        $post = new Post();

        $userA = new User('Bear');
        $userB = new User('Lin');

        $post->attachObserver($userA);
        $post->attachObserver($userB);

        $post->notifyObservers();
    }
}
