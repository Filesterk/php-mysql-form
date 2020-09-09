<?php

require_once 'db-connect.php'; // Тут ты зареквайрил все функции из db-connect.php
// значит они уже доступны к вызову
// тут получим линк (только используй свои парвильные параметры)
$dbLink = setup_db_connection('mysql', 'alex', 'alex', 'alex_sandbox');
  
$allItems = get_all_records($dbLink, 'item');
var_dump($allItems);
// только поменяй имя таблицы, это очень рогато выглядит, пусть будет item или goods
// теперь у тебя будет результат в виде $allRecords, с которым можно что-то делать
// например вывести красиво в табличном виде, что я и пытаюсь от тебя добиться
?>

<?php
   require_once 'db-connect.php';
   $dbLink = setup_db_connection('mysql', 'alex', 'alex', 'alex_sandbox');
   $recordId = 3;  
   $idItems = get_record_by_id($dbLink, $recordId, 'item');  
   var_dump($idItems);
?>

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
require('testfiles/navbar.php');  //require_once
?>
<?php
//include('testfiles/someform.php');  // @todo: Hide this form    
// @todo: show me the form to add a new record to the `item` table
?>
<?php
require('practice-functions.php');  //require_once
?>

<form action="index.php" method="POST">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="form-group">
    <label>Model:</label>
    <input type="text" class="form-control" name="model" id="model">
  </div>
  <div class="form-group">
    <label>Price:</label>
    <input type="number" class="form-control" name="price" id="price">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>