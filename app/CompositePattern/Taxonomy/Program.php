<?php

namespace App\CompositePattern\Taxonomy;

class Program
{
    public function getTaxonomy($animal)
    {
        switch ($animal) {
            case 'koala':
                $this->getKoalaTaxonomy();
                break;
            case 'king penguin':
                $this->getKingPenguinTaxonomy();
                break;
        }
    }

    private function getKoalaTaxonomy()
    {
        echo '
        動物界
        -- 脊索動物門
        ---- 哺乳綱
        ------ 雙門齒目
        -------- 無尾熊科
        ---------- 無尾熊屬
        ------------ 無尾熊
        ';
    }

    private function getKingPenguinTaxonomy()
    {
        echo '
        動物界
        -- 脊索動物門
        ---- 鳥綱
        ------ 企鵝目
        -------- 企鵝科
        ---------- 王企鵝屬
        ------------ 國王企鵝
        ';
    }
}
