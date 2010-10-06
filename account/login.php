<?php
require_once("../db.php");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
if (isset($_POST['remember'])) {
  $remember = true;
}else{
  $remember = false;
}
// TODO do something with remember

$query = sprintf("SELECT id, username, email FROM users WHERE username='%s' AND password=MD5('%s');", mysql_real_escape_string($username), mysql_real_escape_string($password));
$result = mysql_query($query);

if (!$result) {
  print mysql_error();
  exit();
}

if (mysql_affected_rows() == 0){
  print "No such user in the database";
  exit();
} else {
  $_SESSION['user'] = mysql_fetch_assoc($result);
}

header("Location: " .  $_SERVER['HTTP_REFERER']);

?>
