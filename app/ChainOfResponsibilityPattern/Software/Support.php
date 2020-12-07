<?php

namespace App\ChainOfResponsibilityPattern\Software;

use App\ChainOfResponsibilityPattern\Software\Abstracts\Handler;

class Support extends Handler
{
    /**
     * @var string
     */
    public $role = 'Support';

    /**
     * @var array
     */
    protected $canHandleType = ['bug'];
}
