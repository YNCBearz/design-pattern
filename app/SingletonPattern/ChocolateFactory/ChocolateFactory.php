<?php
namespace App\SingletonPattern\ChocolateFactory;

use App\SingletonPattern\ChocolateFactory\ChocolateBoiler;

class ChocolateFactory
{
    public function run()
    {
        //員工A上班，開始煮巧克力
        $boiler = ChocolateBoiler::getInstance();

        $boiler->fill();
        $boiler->boil();

        //員工B上班，開始煮巧克力
        $boiler = ChocolateBoiler::getInstance();
        $boiler->drain();

        $boiler->fill();
        $boiler->boil();
        $boiler->drain();
    }
}