<?php
error_reporting(0);

class Database
{
    const DB_HOST = 'localhost', DB_USER = 'root', DB_PASSWORD = '', DB_NAME = 'cms';

    private static $db;
    private $connection;

    private function __construct()
    {
        $this->connection = new MySQLi(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }

    public function __destruct()
    {
        $this->connection->close();
    }

    public static function getConnection()
    {
        if (self::$db == null) {
            self::$db = new Database();
        }
        return self::$db->connection;
    }
}
