<?php

require_once("./common.php");

$id = $_SESSION['user']['id'];
// get poll metadata
$query = "SELECT * FROM polls WHERE owner_id = $id";
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result))
  $polls[] = $row;

$smarty->assign("polls", $polls);

$smarty->display("mypolls.html");

?>
