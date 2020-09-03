<?php
// I have removed require_once 'save-form-data.php'; Because it will be absolutely another http request. You will see later
require_once 'db-connect.php';

//$dbLink = setup_db_connection('localhost', 'root', '', 'alex_sandbox'); // call this function on the start of the script
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

  <?php
      //require_once 'db-connect.php';
      $errors = "";
      $host = 'localhost';
      $user = 'root';
      $password = '';
      $dbName = 'alex_sandbox';
      $tableName = 'tovar';
      $link = mysqli_connect($host, $user, $password, $dbName);
      $name = $_POST['name'];
      $model = $_POST['model'];
      $price = $_POST['price'];

      if (isset($_POST['submit'])) {

        if (!isset($name, $model, $price)) {
          $errors = "Error! Fill in the field!";
        } else {  
             
          $query = "INSERT INTO $tableName (`id`, `name`, `model`, `price`) 
          VALUES (NULL, `$name`, `$model`, `$price`)";
          mysqli_query($link, $query);
      }
    }
  ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>