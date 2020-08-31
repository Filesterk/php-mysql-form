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
    $sql = "SELECT * FROM tovar"; 
    $result = [get_all_records()->query($sql)];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<br> id: ". $row["id"]. "<br> name: ". $row["name"]. "<br> model: ". $row["model"]. "<br> price: ". $row["price"];
        }
    }
     //Your code !
    return $result;
    get_all_records()->close();
}

/**
 * @param int $recordId
 * @param string $tableName
 * @return array
 * @todo: Write a function that will get single record from known table with known id
 */
function get_record_by_id(int $recordId, string $tableName): array
{
    $result = "INSERT INTO `tovar`(`id`, `name`, `model`, `price`) VALUES (NULL, `$name`, `$model`, `$price`)";

    if (insert_record_by_id()->query($result) === TRUE) {
        $last_id = insert_record_by_id()->insert_id;
        echo "last id" . $last_id;       
    }

    //$result = [$link];
    // Your code !
    return $result;
    
    get_record_by_id()->close();
}

/**
 * @param array $recordData
 * @param string $tableName
 * @todo: Write a function to insert a new record in known table
 */
function insert_new_record(array $recordData, string $tableName)
{
    $sql = "INSERT INTO `tovar`(`id`, `name`, `model`, `price`) VALUES (NULL, `$name`, `$model`, `$price`)";

    if (insert_new_record()->query($sql) === TRUE) {
        echo "Record created";
       
    }
    insert_new_record()->close();
}
