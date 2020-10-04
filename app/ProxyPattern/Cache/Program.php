<?php

namespace App\ProxyPattern\Cache;

use App\ProxyPattern\Cache\Database;

class Program
{
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
    public function search(string $keyword): array
    {
        return $this->database->read($keyword);
    }
}
