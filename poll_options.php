<?php

require_once("./common.php");

$poll_id = $_GET['poll_id'];

$query = sprintf("SELECT * FROM polls WHERE id = %s", mysql_real_escape_string($poll_id));
$result = mysql_query($query);

$poll = mysql_fetch_array($result);

$smarty->assign("title", $poll['title']);
$smarty->assign("description", $poll['description']);
$smarty->assign("poll_id", $poll_id);
$smarty->display ("poll_options.html");

?>
