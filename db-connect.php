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
    $link = mysqli_connect('localhost', 'root', '', 'alex_sandbox', $port);

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    return $link;
}

/**
 * @param mysqli $link
 * @param string $tableName
 * @return array
 * @todo: Write a function that will get all records from known table
 */
function get_all_records(mysqli $link, string $tableName): array
{
    $result = mysqli_query($link, "SELECT * FROM $tableName", MYSQLI_USE_RESULT);

    $items = [];

    foreach (mysqli_fetch_all($result) as $row) {
        $items[] = $row;
    }

    return $items;
}

/**
 * @param mysqli $link
 * @param int $recordId
 * @param string $tableName
 * @return array
 * @todo: Write a function that will get single record from known table with known id
 */

function get_record_by_id(mysqli $link, int $recordId, string $tableName): array
{

    if ($result = mysqli_query($link, "SELECT * FROM $tableName WHERE id = '$recordId'")) {
        printf("Select single %d record.\n", mysqli_num_rows($result));
            mysqli_free_result($result);
    }
    
    $itemData = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $itemData[] = $row;        
    }
    
    return $itemData;
}

/**
 * @param array $recordData
 * @param string $tableName
 * @todo: Write a function to insert a new record in known table
 */
/*function insert_new_record(array $recordData, string $tableName)
{
    
    $recordData = (`id`, `name`, `model`, `price`);
   
    $sql = "INSERT INTO $recordData VALUES $tableName";
        if (mysqli_query($link, $sql)) {
                echo "New record created successfully";
        } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        
    mysqli_close($link);         
}*/

