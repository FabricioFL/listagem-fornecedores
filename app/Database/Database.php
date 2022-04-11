<?php

namespace App\Database;

use PDO;

class Database
{
    private static pdo $db;

    private static function start()
    {
        self::$db = new pdo('mysql:host='.$_ENV['DBHOST'].';dbname='.$_ENV['DBNAME'], $_ENV['DBUSER'], $_ENV['DBPASSWORD']);
    }
}