<?php

namespace App\SingletonPattern\DBConnection;

class Program
{
    /**
     * @return DBConnection
     */
    public function getDBConnection()
    {
        return DBConnection::getInstance();
    }
}
