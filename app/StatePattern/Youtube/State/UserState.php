<?php

namespace App\StatePattern\Youtube\State;

abstract class UserState
{
    const LICENCE = 'undefined user';

    public function getLicense()
    {
        return $this::LICENCE;
    }

    abstract function register();

    abstract function subscribe();

    abstract function cancelSubscription();

    abstract function deleteAccount();
}
