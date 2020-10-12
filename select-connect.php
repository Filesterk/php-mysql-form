<?php
// This file become a small library with db access functions
// Place here the functions that perform any interactions with db
/**
 * @param string $host
 * @param string $user
 * @param string $password
 * @param string $dbName
 * @param int|null $port
 * @return mysqli
 */
// function setup_db_connection(string $host, string $user, string $password, string $dbName, ?int $port = null): mysqli
// {
//     $link = mysqli_connect($host, $user, $password, $dbName, $port);

//     if (!$link) {
//         echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
//         echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
//         echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
//         exit;
//     }

//     return $link;
// }

/**
 * @param mysqli $link
 * @param string $tableName
 * @return array
 * @todo: Write a function that will get all records from known table
 */
// function get_all_records(mysqli $link, string $tableName): array
// {
//     $result = mysqli_query($link, "SELECT * FROM $tableName", MYSQLI_USE_RESULT);

//     $items = [];

//     foreach (mysqli_fetch_all($result) as $row) {
//         $items[] = $row;
//     }

//     return $items;
// }
?>