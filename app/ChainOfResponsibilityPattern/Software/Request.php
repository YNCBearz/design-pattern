<?php

namespace App\ChainOfResponsibilityPattern\Software;

class Request
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $content;

    public function __construct($type, $content)
    {
        $this->type = $type;
        $this->content = $content;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getContent()
    {
        return $this->content;
    }
}
