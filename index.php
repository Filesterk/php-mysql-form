<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <title>Form</title>
</head>
<body>

<div class="container" style="background-color:#d6d6d6; padding-bottom: 20px;">
<?php
require('navbar.php');  //require_once
?>
<?php
include('someform.php');  //include_once
?>
</div>

<h1><a href="mysqltable.php">Go to table</a> <br></h1>

<?php
//http://formserver/index.php   method POST
//http://formserver/index.php?login=Pupkin
//http://formserver/index.php?user=Pupkin&password=10kn
//http://formserver/index.php?user=Ivanov&password=1df234k
//http://formserver/index.php?user=Pupkin&password=10kn&textarea=text

//Выводит информацию о переменной
var_dump($_GET);
$a = $_GET['password'];   //задание переменных
$b = 'user';
$c = $_GET[$b];
$d = $_GET['textarea'];
//echo $a;
echo '<br>';
// echo $c;
//var_dump( isset($_GET['password']));  //существует ли переменная в массиве
//var_dump( $_GET['password'] !== ''); //проверка на пустую строку
//var_dump( trim($_GET['password']) !== ''); //проверка на все пробелы

// вывод переменной при наличии, отмена пробелов
// if (isset($_GET['password']) AND trim($_GET['password']) !=='') {
//   $b = trim($_GET['password']);
//   echo $b;
// }

if( !empty($_GET) ) {
  echo "Массив _GET не пустой";
  echo "<h1>Имя " . $_GET['user'] . "</h1>";  //запрос данных
  echo "<h1>Пароль " . $_GET['password'] . "</h1>";
  echo "<h1>Описание " . $_GET['textarea'] . "</h1>";
} else{
  echo "Массив _GET пустой";
}

//http://formserver/index.php   
// var_dump($_POST);
// echo '<br>';
// echo $_POST['user'];
 
//проверка нажатия checkbox
	if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
		echo 'вы не согласны с данными';
	}

	if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
		echo 'вы согласны с данными';
	}
?>
<br/>

<?php
   print_r($_GET);  //вывод массива
   echo $_GET["user"];  //вывод имени после массива
?>

<br/>
<!--Исправить-->
<?php
  if(isset($_GET["send"])) {
    if($_GET["name"] == "")
        echo "Введите имя. <a href='/'>Исправить</a>";
    else
        header("Location:index.php");
  }
?>

<!--Подключение к БД-->
<?php
require_once('includedbtest.php');
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>