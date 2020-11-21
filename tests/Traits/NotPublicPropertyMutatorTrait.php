<?php

namespace Tests\Traits;

use ReflectionClass;

trait notPublicPropertyMutatorTrait
{
    protected function setSutProperty($name, $value)
    {
        $reflection = new ReflectionClass($this->sut);
        $property = $reflection->getProperty($name);
        $property->setAccessible(true);
        $property->setValue($this->sut, $value);
    }

    protected function getSutProperty($name)
    {
        $reflection = new ReflectionClass($this->sut);
        $property = $reflection->getProperty($name);
        $property->setAccessible(true);
        return $property->getValue($this->sut);
    }
}
