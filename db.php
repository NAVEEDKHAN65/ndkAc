<?php
ob_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'naveed');
define('DB_PASSWORD', 'ndk1234');
define('DB_DATABASE', 'ndkiot');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>