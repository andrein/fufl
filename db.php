<?php

$db_host = "localhost";
$db_user = "fufl";
$db_pass = "fuflrulz";
$db_data = "fufl";

$conn = mysql_connect ($db_host, $db_user, $db_pass) OR DIE ("Can't connect to the database");
mysql_select_db ($db_data, $conn);

?>
