<?php

namespace App\BridgePattern\Zodiac;

use App\BridgePattern\Zodiac\Rat;
use App\BridgePattern\Zodiac\Ox;
use ReflectionClass;
use App\BridgePattern\Zodiac\Contracts\Contestant;

class Program
{
    /**
     * @param string $animal
     */
    public function crossRiver($animal)
    {
        $contestant = $this->getContestant($animal);
        $contestant->crossRiver();
    }

    /**
     * @param string $animalName
     * @return Contestant
     */
    private function getContestant($animalName)
    {
        $namespace = 'App\BridgePattern\Zodiac\Contestants';
        $className = ucfirst($animalName);

        $reflector = new ReflectionClass($namespace . '\\' . $className);
        return $reflector->newInstance();
    }
}
