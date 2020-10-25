<?php

namespace Tests\Unit\MementoPattern\Git;

use App\MementoPattern\Git\Git;
use App\MementoPattern\Git\Folder;
use PHPUnit\Framework\TestCase;
use App\MementoPattern\Git\Commit;

class GitTest extends TestCase
{
    /**
     * @var Git
     */
    protected $sut;

    /**
     * @test
     */
    public function Given_Changes_When_Commit_Then_No_Changes()
    {
        //Arrange
        $expected = '';

        /**
         * @var Folder&\PHPUnit\Framework\MockObject\MockObject
         */
        $stub = $this->createMock(Folder::class);
        $this->sut = new Git($stub);

        $this->sut->writeCode('abc');

        //Actual
        $this->sut->commit();

        //Assert
        $this->assertEquals($expected, $this->sut->getUntrackedCode());
    }

    /**
     * @test
     */
    public function Given_Code_When_Commit_Then_Save_Commit_To_Folder()
    {
        //Arrange
        /**
         * @var Folder&\PHPUnit\Framework\MockObject\MockObject
         */
        $mockFolder = $this->createMock(Folder::class);
        $this->sut = new Git($mockFolder);

        $changes = 'abc';
        $this->sut->writeCode($changes);

        $commit = new Commit($changes);

        //Expect
        $mockFolder->expects($this->once())
            ->method('saveCommit')
            ->with($commit);

        //Actual
        $this->sut->commit();
    }

    /**
     * @test
     */
    public function Given_Committed_Code_When_ResetSoft_Then_Get_Commited_Code()
    {
        //Arrange
        /**
         * @var Folder&\PHPUnit\Framework\MockObject\MockObject
         */
        $stubFolder = $this->createMock(Folder::class);
        $this->sut = new Git($stubFolder);

        $expected = '123, last changed';
        $stubFolder->method('getPreviousCommit')
            ->willReturn(new Commit($expected));

        //Actual
        $this->sut->reset(1);

        //Assert
        $this->assertEquals($expected, $this->sut->getUntrackedCode());
    }
}
