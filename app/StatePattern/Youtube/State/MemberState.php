<?php

namespace App\StatePattern\Youtube\State;

use App\StatePattern\Youtube\Program;
use Exception;
use App\StatePattern\Youtube\State\UserState;

class MemberState extends UserState
{
    /**
     * @var Program
     */
    protected $program;

    /**
     * @var string
     */
    const LICENCE = 'member';

    /**
     * @param Program $program
     */
    public function __construct(Program $program)
    {
        $this->program = $program;
    }

    public function register()
    {
        return;
    }

    public function subscribe()
    {
        $this->program->setPremiumState();
    }

    public function cancelSubscription()
    {
        throw new Exception('Sorry, you have not subscribed.');
    }

    public function deleteAccount()
    {
        $this->program->setGuestState();
    }
}
