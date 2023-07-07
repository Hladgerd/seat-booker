<?php

namespace Core;

use PDO;

abstract class Model
{

    protected static function getDB(): mixed
    {
        static $db = null;

        if ($db === null) {
            $dsn = DB_DRIVER . ":host=".DB_HOST.";dbname=".DB_NAME;
            $db = new PDO($dsn, DB_USER,DB_PASSWORD);

            // Throw an Exception when an error occurs
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $db;
    }
}
