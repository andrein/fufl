<?php
require_once("./db.php");

$index = 0;

foreach ($_POST as $choice){
  $value = 1<<$index++;
  $query = "INSERT INTO poll_options VALUES ('$_GET[poll_id]', '$choice', '$value');";
  mysql_query($query);  
}

header("Location: poll.php?poll_id=" .  $_GET[poll_id]);

?>
