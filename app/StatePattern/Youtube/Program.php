<?php

namespace App\StatePattern\Youtube;

class Program
{
    /**
     * @var string
     */
    protected $license;

    public function __construct()
    {
        $this->license = 'guest';
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
}
