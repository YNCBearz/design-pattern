<?php

namespace App\VisitorPattern\Wedding;

class Program
{
    /**
     * @param string $weddingType
     * @return string
     */
    public function getBrideGroomClothes($weddingType)
    {
        switch ($weddingType) {
            case 'ChineseWedding':
                return '中式囍袍';
                break;

            case 'JapaneseWedding':
                return '繡有家紋的和服';
                break;
        }
    }

    /**
     * @param string $weddingType
     * @return string
     */
    public function getBrideClothes($weddingType)
    {
        switch ($weddingType) {
            case 'Chinese':
                return '龍鳳褂';
                break;
        }
    }
}
