<?php

namespace Tests\Unit\SingletonPattern\DBConnection;

use PHPUnit\Framework\TestCase;
use App\SingletonPattern\DBConnection\Program;
use App\SingletonPattern\DBConnection\DBConnection;

class ProgramTest extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new Program();
    }


    public function testGetDBConnection()
    {
        $firstDBConnection = $this->sut->getDBConnection();
        $secondDBConnection = $this->sut->getDBConnection();

        $this->assertInstanceOf(DBConnection::class, $firstDBConnection);
        $this->assertSame($firstDBConnection, $secondDBConnection);
    }
}
