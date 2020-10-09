<?php

namespace App\ProxyPattern\Cache;

use App\ProxyPattern\Cache\CacheProxy;

class Program
{
    /**
     * @var CacheProxy
     */
    protected $proxy;

    public function __construct()
    {
        $this->proxy = new CacheProxy();
    }

    /**
     * @param string $keyword
     * @return array
     */
    public function search(string $keyword): array
    {
        return $this->proxy->read($keyword);
    }
}
