<?php

//Корень проекта
define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);

// spl_autoload_register

function my_autoloader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    if (file_exists($path . '.php')) {
        include ROOT_PATH . $path . '.php';
    }
}

// Функция принимает для регистрации автозагрузчиков названия функций...
spl_autoload_register('my_autoloader');

// ...и анонимные функции
spl_autoload_register(function ($class) {
    include $_SERVER['DOCUMENT_ROOT'] . $class . '.php';
});

$url = $_SERVER['REQUEST_URI'];
$query = parse_url($url, PHP_URL_QUERY);

// анализ запроса url
if (empty($query)){
    app\Controllers\ControllerNews::pageIndex("page=1");
} else {
    if (str_contains($query, 'page')) {
        app\Controllers\ControllerNews::pageIndex($query);
    } else if (str_contains($query, 'search')) {
        app\Controllers\ControllerNews::pageDetail($query);
    }
}
