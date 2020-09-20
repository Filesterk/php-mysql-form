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
            mysqli_fetch_array($result);
    }
    
    $itemData = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $itemData[] = $row;       
    }
   
    return $itemData;
}

/**
 * @param mysqli $link
 * @param array $recordData
 * @param string $tableName
 * @return false|mixed
 * @todo: Write a function to insert a new record in known table
 */
function insert_new_record(mysqli $link, array $recordData, string $tableName)  //write mysqli $link
{
    $result = "Insert into $recordData values $tableName";
    //$result = "INSERT INTO `item`(`id`, `name`, `model`, `price`) VALUES ('name'=>$_POST['name'], 'model'=>$_POST['model'], 'price'=>$_POST['price'])";
    $insertData = $link->query($result);
    
    if (!$insertData) {
        return false;
      } else {
       return $link->insert_id; 
   }
}

/*{
    if ($result = mysqli_query($link, "INSERT INTO $recordData values $tableName")) {
        printf("Идентификатор последней вставленной записи %d\n", mysql_insert_id($result));
        mysqli_fetch_array($result);
    }
    $insert = [];
    while ($arr = mysqli_fetch_assoc($result)) {
        $insert[] = $arr;       
    }
    return $insert;
    =====================    
    $recordData = (`id`, `name`, `model`, `price`);
   
    $sql = "INSERT INTO $recordData VALUES $tableName";
        if (mysqli_query($link, $sql)) {
                echo "New record created successfully";
        } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        
    mysqli_close($link);         
}*/

