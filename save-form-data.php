<?php
// 1. connect to mysql database
// use include() to plug db connection script

$link = mysqli_connect('localhost','root','','alex_sandbox');

if(mysqli_connect_errno()) 
{
   echo 'Ошибка в подключении к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
   exit();
}