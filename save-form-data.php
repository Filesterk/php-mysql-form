<?php
// 1. connect to mysql database
// use include() to plug db connection script

// @todo: Use here setup_db_connection() function instead of mysqli_connect()
$link = mysqli_connect('localhost','root','','alex_sandbox');
//

// setup_db_connection already have error reporting, so you can @todo: remove the code below
