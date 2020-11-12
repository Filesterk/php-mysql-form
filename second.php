
<!--insert_new_record-->
<?php   
  $recordData = array('first'=>$_POST['name'], 'second'=>$_POST['model'], 'third'=>$_POST['price']);
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
  $recordData = array('four'=>$_POST['brand']); 
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


<?php
function insert_new_record(mysqli $link, array $recordData, string $tableName)  
{
      
   //Отправляемые данные универсальной функцией
   foreach ($recordData as $value){
    $recordData = value[$i];

    $insertString = "INSERT INTO " . $tableName . "(name, model, price, brand) 
    VALUES ('$recordData')";

    $i++;
  }

    $insertData = $link->query($insertString);
    
    if (!$insertData) {
        echo "<br>" . $insertString . "<br><br>";
        echo 'Error: ' . $link->error . '\n';
        return false;
      } else {
       return $link->insert_id; 
   }
}
?>

<?php
$recordData = array('name'=>$_POST['name'], 'model'=>$_POST['model'], 'price'=>$_POST['price']);
$recordData = array('brand'=> $_POST['brand']);
$_fields = array('field1'=>'value1','field2'=>'value2','field3'=>'value3');

INSERT INTO $tableName (field1,field2,field3) VALUES ('value1','value2','value3');
?>







<?php
function insert_new_record(mysqli $link, array $recordData, string $tableName)  
{
  foreach ($recordData as $value){

    $insertString = "INSERT INTO " . $tableName . "('name'=>$_POST['name'], 
    'model'=>$_POST['model'], 'price'=>$_POST['price'], 'brand'=> $_POST['brand']) VALUES ($recordData)";
  }

    $insertData = $link->query($insertString);

    if (!$insertData) {
        echo "<br>" . $insertString . "<br><br>";
        echo 'Error: ' . $link->error . '\n';
        return false;
      } else {
        return $link->insert_id; 
   }
}
?>


<?php
// $recordData = array('name'=>$_POST['name'], 'model'=>$_POST['model'], 'price'=>$_POST['price']);
// $recordData = array('brand'=> $_POST['brand']);

function insert_new_record(mysqli $link, array $recordData, string $tableName)  
{
  foreach ($recordData as $value){

    $insertString = "INSERT INTO " . $tableName . "(name, model, price, brand) 
    VALUES ('name', 'model', 'price', 'brand')";
  }

    $insertData = $link->query($insertString);

    if (!$insertData) {
        echo "<br>" . $insertString . "<br><br>";
        echo 'Error: ' . $link->error . '\n';
        return false;
      } else {
        return $link->insert_id; 
   }
}
?>



<?php
function insert_new_record(mysqli $link, array $recordData, string $tableName)  
{
  foreach ($recordData as $key => $value){

    $insertString = "INSERT INTO " . $tableName . "({$key}) VALUES ({$value})";
  }

    $insertData = $link->query($insertString);

    if (!$insertData) {
        echo "<br>" . $insertString . "<br><br>";
        echo 'Error: ' . $link->error . '\n';
        return false;
      } else {
        return $link->insert_id; 
   }
}
?>




<?php
function insert_new_record(mysqli $link, array $recordData, string $tableName) {
  
  foreach($recordData as $k => $v){
     $col[] = sanitize($k);
     $val[] = "'".sanitize($v)."'";
  }

  $insertString = "INSERT INTO ".sanitize($tableName)." ('.implode(', ', $col).') VALUES ('.implode(', ', $val).')" ;

  $insertData = $link->query($insertString);

    if (!$insertData) {
        echo "<br>" . $insertString . "<br><br>";
        echo 'Error: ' . $link->error . '\n';
        return false;
      } else {
        return $link->insert_id; 
   }
}
?>










<?php
function insertarray($table, $arr){
  foreach($arr as $k => $v){
     $col[] = sanitize($k);
     $val[] = "'".sanitize($v)."'";
  }

  query('INSERT INTO '.sanitize($table).' ('.implode(', ', $col).') VALUES ('.implode(', ', $val).')' );
}
?>



