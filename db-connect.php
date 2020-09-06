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
    $host = 'localhost';  
    $user = 'root';    
    $password = ''; 
    $dbName = 'alex_sandbox';
    $link = mysqli_connect($host, $user, $password, $dbName);

function get_all_records(mysqli $link, string $tableName): array
{
    $tableName = 'item';

    if ($result = mysqli_query($link, "SELECT * FROM $tableName", MYSQLI_USE_RESULT)) {
<<<<<<< HEAD
        
=======
//        При использовании MYSQLI_USE_RESULT все последующие вызовы этой функции будут возвращать ошибку Commands out of sync до тех пор, пока не будет вызвана функция mysqli_free_result()
        // а ты как раз вызываешь еще до mysqli_free_result
//        if (!mysqli_query($link, "SET @a:='this will not work'")) {  тебе не надо этот блок кода
//            printf("Ошибка: %s\n", mysqli_error($link));
//        }
>>>>>>> 73765b10ed13b7551cb09f660ac60775d10824e4
        mysqli_free_result($result);
    }
    
    //mysqli_close($link);
    //return $result;

    var_dump($link); 

//    foreach ($link as $value) {
//      echo gettype($value), "\n";
//   }
}
 
    //$result = [$link];
     //Your code !
    //return $result;


/**
 * @param int $recordId
 * @param string $tableName
 * @return array
 * @todo: Write a function that will get single record from known table with known id
 */
function get_record_by_id(int $recordId, string $tableName): array
{
    $host = 'localhost';  
    $user = 'root';    
    $password = ''; 
    $dbName = 'alex_sandbox';
    $recordId = 3;
    $tableName = 'tovar';

    $link = mysqli_connect($host, $user, $password, $dbName);
    //$result = [$link];

    if ($result = mysqli_query($link, "SELECT * FROM $tableName WHERE $recordId")) {
        printf("Select single %d record.\n", mysqli_num_rows($result));
    mysqli_free_result($result);
    }
}
    //$result = [$link];
    // Your code !
    //return $result;  


/**
 * @param array $recordData
 * @param string $tableName
 * @todo: Write a function to insert a new record in known table
 */
function insert_new_record(array $recordData, string $tableName)
{
    $host = 'localhost';  
    $user = 'root';    
    $password = ''; 
    $dbName = 'alex_sandbox';
    $tableName = 'tovar';
    //$recordData = (`id`, `name`, `model`, `price`);
    $link = mysqli_connect($host, $user, $password, $dbName);
    // Вот к примеру, я -- пхп. Я вообще не знаю, что такое INSERT, что такое INTO
    //$recordData = INSERT INTO `tovar`(`id`, `name`, `model`, `price`):
    //$tableName = (NULL, `$name`, `$model`, `$price`);
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
  }
   
  echo "Connected successfully";
   
  $sql = "INSERT INTO $recordData VALUES $tableName";
    if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
  mysqli_close($link);         
}

