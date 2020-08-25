<?php
// This file will be your db connection script
// Set up database connection.
// Show errors if connection fails
/**
 * @param string $host
 * @param string $user
 * @param string $password
 * @param $dbName
 * @return mysqli
 */
function setup_db_connection(string $host, string $user, string $password, $dbName): mysqli
{
    $link = mysqli_connect($host, $user, $password, $dbName);

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    return $link;
}