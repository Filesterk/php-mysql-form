<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>После отправки формы</h1>
      <a href="index.php">Back to send</a> <br>
      <a href="list.php">Message list</a> <br>
</body>
</html>

<?php
// вывод данных
//    if(isset($_GET["send"])) {
//    $user = $_GET['user'];
//    echo "Привет, " . $user; 
//    echo '<br>';
//    $password = $_GET['password'];
//    echo "Ваш пароль: " . $password;
//    echo '<br>';
//    $textarea = $_GET['textarea'];
//    echo "Ваше сообщение: " . $textarea;
// }

// Отправленные данные, массив
if(isset($_GET["send"])) {
  print_r($_GET);
}

// Кнопка валидации
// if($_GET["name"] == "")
// echo "Введите имя. <a href='/'>Исправить</a>";
// else
// header("Location:index.php");
?>


