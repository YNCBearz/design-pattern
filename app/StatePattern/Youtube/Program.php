<?php

namespace App\StatePattern\Youtube;

class Program
{
    /**
     * @var string
     */
    public $license;

    public function __construct()
    {
        $this->license = 'guest';
    }

    public function register()
    {
        $this->license = 'member';
    }
}
