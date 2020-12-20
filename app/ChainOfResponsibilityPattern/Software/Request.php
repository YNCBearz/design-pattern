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

    /**
     * @param string $type
     * @param string $content
     */
    public function __construct(string $type, string $content)
    {
        $this->type = $type;
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
