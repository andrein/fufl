<?php
require_once("./db.php");

mysql_query("INSERT INTO polls (title ,description, name) VALUES ('$_POST[title]' , '$_POST[description]', '$_POST[name]');");

header("Location: poll_options.php?poll_id=" .  mysql_insert_id());

?>
