<?php

namespace Tests\Unit\CompositePattern\Taxonomy;

use PHPUnit\Framework\TestCase;
use App\CompositePattern\Taxonomy\Program;

class ProgramTest extends TestCase
{
    /**
     * @var Program
     */
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Program();
    }

    /**
     * just run, no test
     */
    public function testGetTaxonomy()
    {
        $expected = '動物界
-- 脊索動物門
---- 哺乳綱
------ 雙門齒目
-------- 無尾熊科
---------- 無尾熊屬
------------ 無尾熊

------ 食肉目
-------- 熊科
---------- 大貓熊屬
------------ 大貓熊

------ 長鼻目
-------- 象科
---------- 象屬
------------ 亞洲象

';
        $this->sut->getTaxonomy();
        $this->expectOutputString($expected);
    }
}
