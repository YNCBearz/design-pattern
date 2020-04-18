<?php
namespace App\SingletonPattern\ChocolateFactory;

use App\SingletonPattern\ChocolateFactory\ChocolateBoiler;

class ChocolateFactory
{
    public function run()
    {
        $boiler = new ChocolateBoiler();

        $boiler->fill();
        $boiler->boil();
        $boiler->drain();
    }
}