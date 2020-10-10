<?php

namespace App\StatePattern\Youtube;

use App\StatePattern\Youtube\State\MemberState;
use App\StatePattern\Youtube\State\GuestState;
use App\StatePattern\Youtube\State\PremiumState;
use App\StatePattern\Youtube\State\UserState;

class Program
{
    /**
     * @var string
     */
    protected $license;

    /**
     * @var MemberState
     */
    protected $memberState;

    /**
     * @var GuestState
     */
    protected $guestState;

    /**
     * @var PremiumState
     */
    protected $premiumState;

    /**
     * @var UserState
     */
    protected $state;

    public function __construct()
    {
        $this->memberState = new MemberState($this);
        $this->guestState = new GuestState($this);
        $this->premiumState = new PremiumState($this);

        $this->state = $this->guestState;
    }

    public function register()
    {
        $this->state->register();
    }

    public function getLicense()
    {
        return $this->state->getLicense();
    }

    public function subscribe()
    {
        $this->state->subscribe();
    }

    public function cancelSubscription()
    {
        $this->state->cancelSubscription();
    }

    public function setGuestState()
    {
        $this->state = $this->guestState;
    }

    public function setMemberState()
    {
        $this->state = $this->memberState;
    }

    public function setPremiumState()
    {
        $this->state = $this->premiumState;
    }

    public function getState()
    {
        return $this->state;
    }

    public function deleteAccount()
    {
        $this->state->deleteAccount();
    }
}
