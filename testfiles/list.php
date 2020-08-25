<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
   <?php require_once 'testfiles/process.php' ?>    <!--подключение 'process.php'-->
   <form action="" method="POST">
      <input type="hidden" name='hidden' value='secret hidden code'>
         <p>First name: <input type="text" name='firstname' value=''></p>
         <p>Last name: <input type="text" name='lastname' value=''></p>
      <input type="submit" name='submit' value='Submit'>
   </form>  

</body>
</html>

<?php
function pre_r( $array ) {
   echo '<pre>';
   print_r($array);
   echo '</pre>';
}
?>