<?php

final class DB
{
    private static $db;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$db) {
            $db = new mysqli('127.0.0.1', 'root', 'root', 'my_shop');
            if ($err = $db->connect_error) {
                (new Logger(Logger::LOG_LEVEL_ERROR, $err));
                throw new Exception($err);
            }
            return self::$db = $db;
        }
        return self::$db;
    }

    private function __clone()
    {
    }
}