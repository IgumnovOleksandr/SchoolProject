<?php

class DB{
    public static $connection;
    public static function connect(){
        try{
            $dsn = "mysql:dbname=".DB_NAME.";host=".DB_HOST.";charset=utf8;port3306";
            self::$connection = new PDO($dsn, DB_USER, DB_PASSWORD);
            self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }
}

