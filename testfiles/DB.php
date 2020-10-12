
<?php
    
    /*$recordData = array(
    'name'=>$_POST['name'],
    'model'=>$_POST['model'],
    'price'=>$_POST['price']);
    $keys = implode(', ', array_keys($recordData));
    $values = implode(', ', array_values($recordData));*/
    $recordData = array(
      'name'=>$name,
      'model'=>$model,
      'price'=>$price);
      $keys = implode(', ', array($recordData));
      $values = implode(', ', array_values($recordData));

    //$recordData = array(`name`=>'$name', `model`=>'$model', `price`=>'$price');
    //$recordData = `item`(`name`, `model`, `price`);
    //$recordData = array(`name`=>$_POST['name'], `model`=>$_POST['model'], `price`=>$_POST['price']);
   //$recordData = array('name'=>$_POST['name'], 'model'=>$_POST['model'], 'price'=>$_POST['price']);
   //$recordData = array('id', 'item'=>$_POST['name'], 'item'=>$_POST['model'], 'item'=>$_POST['price']);
   //$recordData = array('id', $_POST['name']=>'name', $_POST['model']=>'model', $_POST['price']=>'price');
   //$recordData = array('id', $_POST['name']=>'item', $_POST['model']=>'item', $_POST['price']=>'item');
   //$recordData = array('id'=>NULL, 'name'=>$_POST['name'], 'model'=>$_POST['model'], 'price'=>$_POST['price']);
   //$tableName = ($_POST['name'], $_POST['model'], $_POST['price']);
   
   $insertItems = insert_new_record($dbLink, $recordData, 'item');  
   var_dump($insertItems);
   //var_dump($recordData);
   //insert_new_record($insertData);
   insert_new_record($dbLink, $recordData, 'item');

   //printf ("New Record has id %d.\n", mysqli_insert_id($insertItems));

  //  foreach($insertItems as $key => $index) {
  //   echo "{$key}: {$index}<br />";
  // }
  //print_r(array_values($recordData));
?>

<?php
function insert_new_record(mysqli $link, array $recordData, string $tableName)  //array $recordData write mysqli $link
{
    $name = $_POST['name'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    //$recordData = array('id', 'name'=>$_POST['name'], 'model'=>$_POST['model'], 'price'=>$_POST['price']);
    //$recordData = array('id', $_POST['name']=>'name', $_POST['model']=>'model', $_POST['price']=>'price');
   
   $insertString = "Insert into $recordData values $tableName";     //$tableName
    //$insertString = "INSERT INTO `item`(`id`, `name`, `model`, `price`) VALUES ('name'=>$_POST['name'], 'model'=>$_POST['model'], 'price'=>$_POST['price'])";
    //$insertString = "INSERT INTO `item`(`name`, `model`, `price`) VALUES ('".$name."', '".$model."', '".$price."')";
    
    $insertData = $link->query($insertString);
    
    if (!$insertData) {
        return false;
      } else {
       return $link->insert_id; 
   }
}