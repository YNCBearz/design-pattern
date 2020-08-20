<?php

namespace App\StatePattern\Youtube;

use Exception;

class Program
{
    /**
     * @var string
     */
    protected $license;

    public function __construct()
    {
        $this->setLicense('guest');
    }

    public function register()
    {
        if ($this->license == 'premium') {
            return;
        }

        $this->license = 'member';
    }

    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string $license
     */
    public function setLicense($license)
    {
        $this->license = $license;
    }

    public function subscribe()
    {
        if ($this->license == 'member' || $this->license == 'premium') {
            $this->license = 'premium';
            return;
        }

        throw new Exception('You need to be a member before subscribing.');
    }

    public function cancelSubscription()
    {
        if ($this->license == 'premium') {
            $this->license = 'member';
            return;
        }

        throw new Exception('Sorry, you have not subscribed.');
    }
}
