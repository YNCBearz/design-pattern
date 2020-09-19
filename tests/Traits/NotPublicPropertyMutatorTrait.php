<?php

namespace Tests\Traits;

use ReflectionClass;

trait notPublicPropertyMutatorTrait
{
    protected function setProperty($name, $value)
    {
        $reflection = new ReflectionClass($this->sut);
        $property = $reflection->getProperty($name);
        $property->setAccessible(true);
        $property->setValue($this->sut, $value);
    }

    protected function getProperty($name)
    {
        $reflection = new ReflectionClass($this->sut);
        $property = $reflection->getProperty($name);
        $property->setAccessible(true);
        return $property->getValue($this->sut);
    }
}
