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
        $this->license = 'member';
    }

    public function getLicense()
    {
        return $this->license;
    }
}
