<?php
require_once("./db.php");

$poll_id = $_GET['poll_id'];
$name = $_POST['name'];
$value = 0;

foreach ($_POST['choice'] as $choice){
  $value += $choice;
}

$query = "INSERT INTO results VALUES ('$poll_id', '$name', '$value');";
mysql_query($query);  

header("Location: poll.php?poll_id=" .  $_GET[poll_id]);
?>
