<?php

namespace Tests\Unit\ChainOfResponsibilityPattern\Software;

use PHPUnit\Framework\TestCase;
use App\ChainOfResponsibilityPattern\Software\Program;
use App\ChainOfResponsibilityPattern\Software\Request;

class ProgramTest extends TestCase
{
    /**
     * @var Program
     */
    protected $sut;

    public function setUp(): void
    {
        $this->sut = new Program();
    }

    /**
     * @test
     */
    public function Given_Bug_When_Handle_Then_Customer_Service_Solve()
    {
        $request = new Request('bug', 'no connection');
        $expected = 'Support已開始處理[bug:no connection]的問題。';
        $actual = $this->sut->handle($request);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function Given_Feature_When_Handle_Then_PM_Solve()
    {
        $request = new Request('feature', 'add filter');
        $expected = 'PM已開始處理[feature:add filter]的問題。';
        $actual = $this->sut->handle($request);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function Given_Cooperative_Business_When_Handle_Then_Boss_Solve()
    {
        $request = new Request('cooperative business', 'become Google partner');
        $expected = 'Boss已開始處理[cooperative business:become Google partner]的問題。';
        $actual = $this->sut->handle($request);
        $this->assertEquals($expected, $actual);
    }
}
