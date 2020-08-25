<?php

function get_categories($link) {
   $sql = "SELECT * FROM `tovar`";

   $result = mysqli_query($link, $sql);

   $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

   return $categories;

   /*echo '<pre>';
      var_dump($result);
   echo'</pre>';*/
}

$categories = get_categories($link); 