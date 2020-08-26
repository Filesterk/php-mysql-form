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
function setup_db_connection(string $host, string $user, string $password, string $dbName, ?int $port = null): mysqli
{
    $link = mysqli_connect($host, $user, $password, $dbName, $port);

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    return $link;
}

/**
 * @param string $tableName
 * @return array
 * @todo: Write a function that will get all records from known table
 */
function get_all_records(string $tableName): array
{
    $result = [];
    // Your code !
    return $result;
}

/**
 * @param int $recordId
 * @param string $tableName
 * @return array
 * @todo: Write a function that will get single record from known table with known id
 */
function get_record_by_id(int $recordId, string $tableName): array
{

    $result = [];
    // Your code !
    return $result;
}

/**
 * @param array $recordData
 * @param string $tableName
 * @todo: Write a function to insert a new record in known table
 */
function insert_new_record(array $recordData, string $tableName)
{

}
