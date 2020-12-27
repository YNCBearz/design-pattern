<?php

namespace App\VisitorPattern\Wedding;

use App\VisitorPattern\Wedding\Contracts\WeddingType;
use ReflectionClass;

class WeddingTypeFactory
{
    /**
     * @param string $weddingType
     * @return WeddingType
     */
    public function create($weddingType)
    {
        $namespace = 'App\VisitorPattern\Wedding\Type';
        $className = $weddingType . 'Wedding';

        $reflector = new ReflectionClass($namespace . '\\' . $className);
        return $reflector->newInstance();
    }
}
