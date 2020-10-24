<?php

namespace App\MementoPattern\Git;

use App\MementoPattern\Git\Commit;

/**
 * This is our CareTaker in memento pattern
 */
class Folder
{
    /**
     * @var Commit[]
     */
    private $commits = [];

    /**
     * @param Commit $commit
     */
    public function saveCommit(Commit $commit)
    {
        $this->commits[] = $commit;
    }

    /**
     * @param int $previous
     * @return Commit
     */
    public function getPreviousCommit(int $previous): Commit
    {
        $commitAmount = count($this->commits);
        $index = $commitAmount - $previous;

        $result = $this->commits[$index];
        $this->deleteCommitAfter($index);

        return $result;
    }

    /**
     * @param int $index
     */
    private function deleteCommitAfter(int $index)
    {
        $commitAmount = count($this->commits);

        for ($i = $index; $i < $commitAmount; $i++) {
            unset($this->commits[$i]);
        }
    }
}
