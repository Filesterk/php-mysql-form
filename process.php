<?php 
   pre_r($_POST);
   pre_r($_GET);
   pre_r($_REQUEST);
   if (isset($_POST['submit'])){    //POST форма внесена
      echo "The form is using POST method!".'<br/>';
      echo "First name:".$_POST['firstname'].'<br/>';
      echo "Last name:".$_POST['lastname'].'<br/>';
   }
   elseif (isset($_GET['submit'])){ 
      echo "The form is using GET method!".'<br/>';
      echo "First name:".$_GET['firstname'].'<br/>';
      echo "Last name:".$_GET['lastname'].'<br/>';
   }
   ?>