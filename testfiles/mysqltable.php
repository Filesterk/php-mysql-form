<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <style>
      table{
         width:300px;  
      }
      td{
         border: 1px solid #000;
         text-align: center;
      }
   </style>
   
</head>   
<body>
   
   <?php
error_reporting(E_ALL);
ini_set(`display_errors`, `on`);
//подключение к БД
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'tablebd';

$link = mysqli_connect($host, $user, $password, $dbName); //запрос из БД
   
mysqli_query($link, "SET NAMES 'utf8'"); //задание кодировки

if (isset($_GET['del'])) {    //запрос на удаление
   $id = ($_GET['del']);

   $query = "DELETE FROM usertable WHERE id=$id";
   //echo $query;  
   mysqli_query($link, $query) or die(mysqli_error($link));
}

$query = "SELECT * FROM usertable";    //запрос на получение всех user

$result = mysqli_query($link, $query) or die(mysqli_error($link)); //запрос в БД

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);   //преобразование в массив  
//var_dump($data);     //получение всего массива
?>

<table>
   <?php foreach ($data as $user) { ?>
      <tr>
         <td><?= $user['id'] ?></td>
         <td><?= $user['name'] ?></td>
         <td><a href="testfiles/mysqltable.php?del=<?= $user['id'] ?>">delete</a></td>
      </tr>
   <?php } ?>
   </table>

</body>
</html>

