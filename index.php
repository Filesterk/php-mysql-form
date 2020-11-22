<?php
 require 'config.php';
 $conf = get_configs();
require_once 'db-connect.php';
 $dbLink = setup_db_connection($conf->db->host, $conf->db->user, $conf->db->password, $conf->db->dbName);
$allItems = get_all_records($dbLink, 'item');

var_dump($allItems);
foreach($allItems as $attribute => $data) {
  echo "{$attribute}: {$data}<br />";
}
?>

<?php       
$array = array_chunk($allItems, 4);
?>
 
<table class="city_list">
<thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Model</th>
          <th>Price</th>
        </tr>
</thead>
<tbody>
	<?php foreach ($allItems as $items): ?>
	<tr>
		<?php foreach ($items as $row): ?>
		<td><?php echo $row; ?></td>
		<?php endforeach; ?>
	</tr>
	<?php endforeach; ?>
  </tbody>
</table>
 
<style>
.city_list {
	width: 100%;
}
.city_list td, th {
	width: 25%;
	border: 1px solid #ddd;
	padding: 7px 10px;
}
</style>

<!--get_record_by_id-->
<?php
   $recordId = 3; 
   $idItems = get_record_by_id($dbLink, $recordId, 'item');  
   var_dump($idItems);
?>

<!--insert_new_record-->
<?php 
  $recordData = array('name'=>$_POST['name'], 'model'=>$_POST['model'], 'price'=>$_POST['price']);
    if (isset($_POST['name']) && isset($_POST['model']) && isset($_POST['price'])) {

    $name = $_POST['name'];
    $model = $_POST['model'];
    $price = $_POST['price'];

    $insertItemId = insert_new_record($dbLink, $recordData, 'item');  
    var_dump($insertItemId); 
    var_dump($_POST); 
  } 
    else {
    echo 'Поле было не заполнено'.'<br>'; 
  }
?>

<?php   
$recordData = array('brand'=> $_POST['brand']);
    if (isset($_POST['brand'])) {

    $name = $_POST['brand'];

    $insertItemId = insert_new_record($dbLink, $recordData, 'manufacturer'); 
    var_dump($insertItemId); 
    var_dump($_POST);
    }
    else{
        echo "Информация не занесена в базу данных";
    }
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
require('navbar.php'); 
?>

<form action="" method="POST">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label>Model:</label>
    <input type="text" class="form-control" name="model">
  </div>
  <div class="form-group">
    <label>Price:</label>
    <input type="number" class="form-control" name="price">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<br>
<br>

<div class="container" style="background-color:#d6d6d6; padding-bottom: 20px; margin-bottom: 40px;">
<form action="index.php" method="POST">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" name="brand">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

