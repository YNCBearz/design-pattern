<?php

namespace App\ChainOfResponsibilityPattern\Software;

use App\ChainOfResponsibilityPattern\Software\Request;
use App\ChainOfResponsibilityPattern\Software\Support;

class Program
{
    public function handle(Request $request)
    {
        $type = $request->getType();
        $content = $request->getContent();

        switch ($type) {
            case 'bug':
                return "Support can solve [$type:$content] issue.";
                break;

            case 'feature':
                return "PM can solve [$type:$content] issue.";
                break;

            default:
                return "Boss can solve [$type:$content] issue.";
                break;
        }
    }
}
