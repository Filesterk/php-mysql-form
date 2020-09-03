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
    // Подсказка: Вызови внутри этой функции функцию setup_db_connection(), чтобы получить $link
    // $tableName = mysqli_query("SELECT * FROM tovar", alex_sandbox);
    // $result = mysqli_fetch_array($tableName);

    // Аргумент называется $tableName. Подумай почему
    // Если б я хотел, чтоб там было sql выражение, я б назвал ее $sqlExpression
    $tableName = "SELECT * FROM tovar";

    // т.е. $link->query() и mysql_query() делают то же самое
    // Смотри в документацию mysqli_query ($link, $query, $resultmode = MYSQLI_STORE_RESULT)
    //
    // $link НУЖЕН
    $result = mysqli_query($tableName);

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"];
        echo $row["name"];
        echo $row["model"];
        echo $row["price"];
    }

     //Your code !
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
    // почитай еще раз про область видимости переменных
    // Очевидно, что внутри этой функции $link, не определена
    $result = [$link];

    $recordId = 'SELECT model FROM tovar WHERE id = 2';
    $result = mysql_query($recordId, $link);

    while ($row = mysql_fetch_assoc($result)) {
        echo $row['model'];
    }
    
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
    // Вот к примеру, я -- пхп. Я вообще не знаю, что такое INSERT, что такое INTO
    $recordData = INSERT INTO `tovar`(`id`, `name`, `model`, `price`):
    $tableName = (NULL, `$name`, `$model`, `$price`);

    $sql = "$recordData . VALUES . $tableName";

    if (insert_new_record()->query($sql) === TRUE) {
        echo "Record created";       
    }
}
