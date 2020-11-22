<?php
/**
 * @param mysqli $link
 * @param array $recordData
 * @param string $tableName
 * @return false|mixed
 * @todo: Write a function to insert a new record in known table
 */

 function insert_new_record(mysqli $link, array $recordData, string $tableName)  
{
    $insertString = "INSERT INTO " . $tableName . "(name, model, price) 
    VALUES ('" . $recordData[0] . "', '" . $recordData[1] . "', '" . $recordData[2] . "')";

    $insertString1 = "INSERT INTO " . $tableName . "(brand) VALUES ('" . $recordData[0] . "')";
   
    $insertData = $link->query($insertString);
    $insertData1 = $link->query($insertString1);

    if (!$insertData || !$insertData1) {
        echo "<br>" . $insertString . "<br><br>";
        echo "<br>" . $insertString1 . "<br><br>";
        echo 'Error: ' . $link->error . '\n';
        return false;
      } else {
       return $link->insert_id; 
   }
}
?>

<!--insert_new_record-->
<?php   
  $recordData = array($_POST['name'], $_POST['model'], $_POST['price']);
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
  $recordData = array($_POST['brand']); 
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

