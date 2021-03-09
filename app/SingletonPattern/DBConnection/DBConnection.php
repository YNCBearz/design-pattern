<?php

namespace App\SingletonPattern\DBConnection;

use Exception;

class DBConnection
{
    private static $instance = null;

    /**
     * 僅有私有的建構函式，讓外界僅能以 getInstance() 呼叫
     */
    private function __construct()
    {
    }

    /**
     * 避免克隆後，生成兩個實例
     */
    private function __clone()
    {
    }

    /**
     * 避免反序列化後，生成兩個實例
     *
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }

    /**
     * 透過公開的靜態方法取得實例
     *
     * @return DBConnection
     */
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new self();
        }

        return self::$instance;
    }
}
