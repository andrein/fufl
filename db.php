<?php

$db_host = "localhost";
$db_user = "fufl";
$db_pass = "fuflrulz";
$db_data = "fufl";

$conn = mysql_connect ($db_host, $db_user, $db_pass) OR die(mysql_error());
mysql_select_db ($db_data, $conn) OR die(mysql_error());

?>
