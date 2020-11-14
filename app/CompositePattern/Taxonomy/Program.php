<?php

namespace App\CompositePattern\Taxonomy;

class Program
{
    public function getTaxonomy($animal)
    {
        switch ($animal) {
            case 'polar bear':
                $this->getPolarBearTaxonomy();
                break;
            case 'dog':
                $this->getDogTaxonomy();
                break;
        }
    }

    private function getPolarBearTaxonomy()
    {
        echo '
        動物界
        -- 脊索動物門
        ---- 哺乳綱
        ------ 食肉目
        -------- 熊科
        ---------- 熊屬
        ------------ 北極熊
        ';
    }

    private function getDogTaxonomy()
    {
        echo '
        動物界
        -- 脊索動物門
        ---- 哺乳綱
        ------ 食肉目
        -------- 犬科
        ---------- 犬屬
        ------------ 狼
        ';
    }
}
