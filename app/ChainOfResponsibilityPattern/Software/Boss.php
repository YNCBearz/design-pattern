<?php

namespace App\ChainOfResponsibilityPattern\Software;

use App\ChainOfResponsibilityPattern\Software\Abstracts\Handler;

class Boss extends Handler
{
    /**
     * @var string
     */
    protected $role = 'Boss';

    /**
     * @return boolean
     */
    protected function canHandle()
    {
        return true;
    }
}
