
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
