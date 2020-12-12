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
     * @var string
     */
    protected $requestType;

    /**
     * @var string
     */
    protected $requestContent;

    /**
     * @var Handler
     */
    protected $nextHandler;

    /**
     * @param Request $request
     * @return string
     */
    public function handle(Request $request): string
    {
        $this->requestType = $request->getType();
        $this->requestContent = $request->getContent();

        if ($this->canHandle()) {
            $role = $this->role;
            $result = "$role can solve [$this->requestType:$this->requestContent] issue.";
            return $result;
        }

        return $this->nextHandler->handle($request);
    }

    /**
     * @param Handler $handler
     */
    public function setNextHandler(Handler $handler)
    {
        $this->nextHandler = $handler;
    }

    /**
     * @return boolean
     */
    protected function canHandle()
    {
        return in_array($this->requestType, $this->canHandleType);
    }
}
