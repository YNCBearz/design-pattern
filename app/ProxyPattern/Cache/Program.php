<?php

namespace App\ProxyPattern\Cache;

class Program
{
    /**
     * @var bool
     */
    protected $enabledCache = false;

    /**
     * @param string $keyword
     * @return array
     */
    public function search(string $keyword): array
    {
        return ['Bear Sushi', 'Lin Sushi', 'Alysa Sushi'];
    }
}
