<?php

namespace App\StatePattern\Youtube\State;

use App\StatePattern\Youtube\Program;
use Exception;
use App\StatePattern\Youtube\State\UserState;

class GuestState extends UserState
{
    /**
     * @var Program
     */
    protected $program;

    /**
     * @var string
     */
    const LICENCE = 'guest';

    /**
     * @param Program $program
     */
    public function __construct(Program $program)
    {
        $this->program = $program;
    }

    public function register()
    {
        $this->program->setMemberState();
    }

    public function subscribe()
    {
        throw new Exception('You need to be a member before subscribing.');
    }

    public function cancelSubscription()
    {
        throw new Exception('Sorry, you have not subscribed.');
    }

    public function deleteAccount()
    {
        throw new Exception('You need to be a member before deleting account.');
    }
}
