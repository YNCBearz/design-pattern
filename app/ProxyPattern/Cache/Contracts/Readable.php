<?php

namespace App\ProxyPattern\Cache\Contracts;

interface Readable
{
    /**
     * @param string $keyword
     * @return array
     */
    public function read(string $keyword): array;
}
