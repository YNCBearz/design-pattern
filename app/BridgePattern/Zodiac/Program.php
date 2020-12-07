<?php

namespace App\BridgePattern\Zodiac;

use ReflectionClass;
use App\BridgePattern\Zodiac\Contracts\Contestant;

class Program
{
    /**
     * @param string $animalName
     */
    public function crossRiver($animalName)
    {
        $contestant = $this->getContestant($animalName);
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
