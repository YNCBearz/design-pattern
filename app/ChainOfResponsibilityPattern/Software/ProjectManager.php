<?php

namespace App\ChainOfResponsibilityPattern\Software;

use App\ChainOfResponsibilityPattern\Software\Abstracts\Handler;

class ProjectManager extends Handler
{
    /**
     * @var string
     */
    protected $role = 'PM';

    /**
     * @var array
     */
    protected $canHandleType = ['bug', 'feature'];
}
