<?php

namespace Tests\Unit\MementoPattern\Git;

use PHPUnit\Framework\TestCase;
use App\MementoPattern\Git\Folder;
use Tests\Traits\NotPublicPropertyMutatorTrait;
use App\MementoPattern\Git\Commit;

class FolderTest extends TestCase
{
    use NotPublicPropertyMutatorTrait;

    /**
     * @var Folder
     */
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Folder();
    }

    public function testSaveCommit()
    {
        $firstCommit = new Commit(111);
        $secondCommit = new Commit(222);

        $expected = [$firstCommit, $secondCommit];

        $this->sut->saveCommit($firstCommit);
        $this->sut->saveCommit($secondCommit);

        $this->assertEquals($expected, $this->getSutProperty('commits'));
    }

    public function testGetPreviousCommit()
    {
        $firstCommit = new Commit(111);
        $secondCommit = new Commit(222);
        $thirdCommit = new Commit(333);
        $fourthCommit = new Commit(444);

        $commits = [$firstCommit, $secondCommit, $thirdCommit, $fourthCommit];
        $this->setSutProperty('commits', $commits);

        $actual = $this->sut->getPreviousCommit(1);
        $this->assertEquals($fourthCommit, $actual);

        $actual = $this->sut->getPreviousCommit(2);
        $this->assertEquals($thirdCommit, $actual);
    }
}
