<?php

namespace App\ProxyPattern\Cache;

class Database
{
    /**
     * @param string $keyword
     * @return array
     */
    public function read(string $keyword): array
    {
        if ($keyword == 'sushi') {
            return ['Bear Sushi', 'Lin Sushi', 'Alysa Sushi'];
        }

        return [];
    }
}
