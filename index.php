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
<nav class="navbar navbar-expand-lg navbar-light bg-light" style=" border:1px solid #000; margin-bottom: 30px;">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<form action="form.php" method="GET" style=" border:1px solid #000; padding: 20px;">    <!--method="POST"-->
<div class="form-group">
    <label for="formGroupExampleInput">Login name</label>
    <input name="user" type="text" class="form-control" id="formGroupExampleInput" value="Pupkin" placeholder="Login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" value="10kn" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="hidden" name="hello" value="0">
    <input type="checkbox" name="hello" value="1" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea name="textarea" class="form-control" id="exampleFormControlTextarea1" rows="3">Заполните поле</textarea>
  </div>
  <button name="send" type="submit" class="btn btn-primary" value="отправить">Submit</button>
</form>
</div>

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>