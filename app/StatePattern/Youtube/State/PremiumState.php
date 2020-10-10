<?php

namespace App\StatePattern\Youtube\State;

use App\StatePattern\Youtube\Program;
use App\StatePattern\Youtube\State\UserState;

class PremiumState extends UserState
{
    /**
     * @var Program
     */
    protected $program;

    /**
     * @var string
     */
    const LICENCE = 'premium';

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
        return;
    }

    public function cancelSubscription()
    {
        $this->program->setMemberState();
    }

    public function deleteAccount()
    {
        $this->program->setGuestState();
    }
}
