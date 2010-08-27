<?php
require_once("./db.php");

$index = 0;

foreach ($_POST as $option){
  $value = 1<<$index++;
  $query = "INSERT INTO poll_options VALUES ('$_GET[poll_id]', '$option', '$value');";
  mysql_query($query);  
}

//header("Location: poll_options.php?poll_id=" .  mysql_insert_id());

?>
