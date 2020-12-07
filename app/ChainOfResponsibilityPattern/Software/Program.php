<?php

namespace App\ChainOfResponsibilityPattern\Software;

use Tests\Unit\ChainOfResponsibilityPattern\Software\Request;

class Program
{
    public function handle(Request $request)
    {
        $type = $request->getType();
        $content = $request->getContent();

        switch ($type) {
            case 'bug':
                return "Support已開始處理[$type:$content]的問題。";
                break;

            case 'feature':
                return "PM已開始處理[$type:$content]的問題。";
                break;

            default:
                return "Boss已開始處理[$type:$content]的問題。";
                break;
        }
    }
}
