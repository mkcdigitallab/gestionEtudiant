<?php

namespace App\Database;

use PDO;

class Database
{
    private static ?PDO $instance = null;

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            $config = require __DIR__ . '/../Config/config.php';
            $db = $config['db'];
            $dsn = "pgsql:host={$db['host']};port={$db['port']};dbname={$db['name']}";
            self::$instance = new PDO($dsn, $db['user'], $db['pass']);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
