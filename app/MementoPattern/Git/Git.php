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
    private $changes = '';

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
        return $this->changes;
    }

    /**
     * Setter
     *
     * @var string
     */
    public function writeCode(string $changes)
    {
        $this->changes = $changes;
    }

    public function commit()
    {
        $commit = $this->createCommit();
        $this->changes = '';

        $this->folder->saveCommit($commit);
    }

    private function createCommit(): Commit
    {
        return new Commit($this->changes);
    }

    /**
     * @param int $previous
     * @return string
     */
    public function reset(int $previous): string
    {
        return $this->changes = $this->folder->getPreviousCommit($previous)->getCode();
    }
}
