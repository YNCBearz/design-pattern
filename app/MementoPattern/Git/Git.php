<?php

namespace App\MementoPattern\Git;

use App\MementoPattern\Git\Commit;
use App\MementoPattern\Git\Folder;

/**
 * This is our Originator in memento pattern
 */
class Git
{
    /**
     * @var Folder
     */
    protected $folder;

    /**
     * @var string
     */
    private $code = '';

    /**
     * @param Folder $folder
     */
    public function __construct(Folder $folder)
    {
        $this->folder = $folder;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getUntrackedCode(): string
    {
        return $this->code;
    }

    /**
     * Setter
     *
     * @var string
     */
    public function writeCode(string $code)
    {
        $this->code = $code;
    }

    public function commit()
    {
        $commit = $this->createCommit();
        $this->code = '';

        $this->folder->saveCommit($commit);
    }

    private function createCommit(): Commit
    {
        return new Commit($this->code);
    }

    /**
     * @param int $previous
     * @return string
     */
    public function reset(int $previous): string
    {
        return $this->code = $this->folder->getPreviousCommit($previous)->getCode();
    }
}
