<?php
  error_reporting(E_ALL);
  ini_set(`display_errors`, `on`);

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $dbName = 'test';

  $link = mysqli_connect($host, $user, $password, $dbName) //запрос из БД
      or die(mysqli_error($link)); //искусственный вывод ошибок SQL

  mysqli_query($link, "SET NAMES 'utf8'"); //задание кодировки

  $query = "SELECT * FROM users WHERE id > 0";

  $result = mysqli_query($link, $query) or die(mysqli_error($link)); //запрос в БД

  var_dump($result);

/*  получение 1 строки из массива
  $user = mysqli_fetch_assoc($result);
  var_dump($user);
*/

  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);  //получение всего массива
  var_dump($data);
  //Parse error: syntax error, unexpected 'or' (T_LOGICAL_OR), expecting end of file in W:\domains\formServer\index.php on line 148
?>