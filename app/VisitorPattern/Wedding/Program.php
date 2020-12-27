<?php

namespace App\VisitorPattern\Wedding;

class Program
{
    /**
     * @param string $weddingType
     * @return string
     */
    public function getWedding($weddingType)
    {
        switch ($weddingType) {
            case 'Chinese':
                echo
                    '新郎：中式囍袍
新郎：黑色秀禾鞋
新娘：龍鳳褂
新娘：紅色秀禾鞋';
                break;

            case 'Japanese':
                echo
                    '新郎：繡有家紋的和服
新郎：雪駄
新娘：純潔的白無垢
新娘：草履';
                break;
        }
    }
}
