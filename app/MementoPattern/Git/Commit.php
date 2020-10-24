<?php

namespace App\MementoPattern\Git;

/**
 * This is our Memento in memento pattern
 */
class Commit
{
    /**
     * This is our state.
     *
     * @var string
     */
    private $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function getCode(): string
    {
        return $this->code;
    }
}
