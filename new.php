<form action="index.php" method="POST">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" name="brand">
  </div>
  <button type="submit" name="submit" class="btn btn-primary" name="click">Submit</button>
</form>
<?php   
    $recordData = array($_POST['brand']); 
if (isset($_POST['click'])) {
  $name = $_POST['brand'];
}else{
      echo "Информация не занесена в базу данных";
  }  
  $insertItemId = insert_new_record($dbLink, $recordData, 'manufacturer');  
  var_dump($insertItemId); 
   var_dump($_POST); ?>

<?php
function insert_new_record(mysqli $link, array $recordData, string $tableName)  
{
    $insertString1 = "INSERT INTO " . $tableName . "(brand) VALUES ('" . $recordData[0] . "')";   
    $insertData1 = $link->query($insertString1);
    if (!$insertData1) {
        echo "<br>" . $insertString1 . "<br><br>";
        echo 'Error: ' . $link->error . '\n';
        return false;
      } else {
       return $link->insert_id; 
   }
}  ?>