<?php

namespace App\ChainOfResponsibilityPattern\Software\Abstracts;

use App\ChainOfResponsibilityPattern\Software\Request;

abstract class Handler
{
    /**
     * @var string
     */
    protected $role;

    /**
     * @var array
     */
    protected $canHandleType = [];

    /**
     * @var Handler
     */
    protected $nextHandler;

    public function handle(Request $request)
    {
        $type = $request->getType();
        $content = $request->getContent();

        if ($this->canHandle($type)) {
            return $this->role . '已開始處理[' . $type . ':' . $content . ']的問題。';
        }

        return $this->nextHandler->handle($request);
    }

    public function setNextHandler(Handler $handler)
    {
        $this->nextHandler = $handler;
    }

    /**
     * @param string $type
     * @return boolean
     */
    public function canHandle($type)
    {
        return in_array($type, $this->canHandleType);
    }
}
