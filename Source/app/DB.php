<?php

namespace app;

class DB
{
    // Переменная для хранения объекта соединения
    private static $conn = null;
    public static function connect() 
    {
        // Проверка наличия соединения
        if (self::$conn === null) {
            require_once dirname(__DIR__) .'/app/config.php';
            // Создание соединения, если отсутствует
            self::$conn = new \mysqli($host,$user,$pass,$db);
            return self::$conn;
        }
        // Использование существующего соединения
        return self::$conn;
    }
}