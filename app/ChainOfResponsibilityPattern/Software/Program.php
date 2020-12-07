<?php

namespace App\ChainOfResponsibilityPattern\Software;

use App\ChainOfResponsibilityPattern\Software\Request;
use App\ChainOfResponsibilityPattern\Software\Support;

class Program
{
    public function handle(Request $request)
    {
        $support = new Support();
        $projectManager = new ProjectManager();
        $boss = new Boss();

        $support->setNextHandler($projectManager);
        $projectManager->setNextHandler($boss);

        return $support->handle($request);
    }
}
