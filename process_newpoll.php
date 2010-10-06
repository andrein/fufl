<?php
require_once("./common.php");

$title = $_POST['title'];
$description = $_POST['description'];
$name = $_POST['name'];
if (isset($_SESSION['user']))
  $ownerid = $_SESSION['user']['id'];
else
  $ownerid = 0;


$query = sprintf("INSERT INTO polls (title ,description, name, owner_id) VALUES ('%s' , '%s', '%s', $ownerid);",
         mysql_real_escape_string($title),
	 mysql_real_escape_string($description),
	 mysql_real_escape_string($name)
	 );

mysql_query($query);

header("Location: poll_options.php?poll_id=" .  mysql_insert_id());

?>
