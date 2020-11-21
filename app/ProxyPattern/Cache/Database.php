<?php

namespace App\ProxyPattern\Cache;

use App\ProxyPattern\Cache\Contracts\Readable;

class Database implements Readable
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
