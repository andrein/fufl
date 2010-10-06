<?php

require_once("libs.inc.php");
require_once("db.php");
session_start();

if (isset($_SESSION['user']))
  $username = $_SESSION['user']['username'];
else
  $username = '';

$smarty->assign("username", $username);

?>
