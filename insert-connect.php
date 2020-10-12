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
 * @param mysqli $link
 * @param array $recordData
 * @param string $tableName
 * @return false|mixed
 * @todo: Write a function to insert a new record in known table
 */

function insert_new_record(mysqli $link, array $recordData, string $tableName)  
{
    $insertString = "INSERT INTO " . $tableName . "(name, model, price) VALUES ('" . $recordData[0] . "', '" . $recordData[1] . "', '" . $recordData[2] . "')";
    $insertData = $link->query($insertString);
    
    if (!$insertData) {
        echo "<br>" . $insertString . "<br><br>";
        echo 'Error: ' . $link->error . '\n';
        return false;
      } else {
       return $link->insert_id; 
   }
}
