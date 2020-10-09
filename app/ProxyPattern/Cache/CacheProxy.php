<?php

namespace App\ProxyPattern\Cache;

use App\ProxyPattern\Cache\Contracts\Readable;

class CacheProxy implements Readable
{
    /**
     * @var array
     */
    protected $cached = [];

    /**
     * @var Database
     */
    protected $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    /**
     * @param string $keyword
     * @return array
     */
    public function read(string $keyword): array
    {
        if (isset($this->cached[$keyword])) {
            return $this->cached[$keyword];
        }

        $result = $this->database->read($keyword);
        $this->cached[$keyword] = $result;

        return $result;
    }
}
