<?php
require_once("../db.php");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = sprintf("INSERT INTO users (username, password, email) VALUES ('%s', MD5('%s'), '%s');", 
         mysql_real_escape_string($username), 
         mysql_real_escape_string($password), 
         mysql_real_escape_string($email));
mysql_query($query);

header("Location: " .  $_SERVER['HTTP_REFERER']);

?>
