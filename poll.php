<?php

require_once("./libs.inc.php");
require_once("./db.php");

$poll_id = $_GET['poll_id'];

// get poll metadata
$query = "SELECT * FROM polls WHERE id = $poll_id";
$result = mysql_query($query);
$poll = mysql_fetch_array($result);

$smarty->assign("title", $poll['title']);
$smarty->assign("description", $poll['description']);
$smarty->assign("poll_id", $poll_id);

// get poll options
$query = "SELECT choice, value FROM poll_options WHERE poll_id = $poll_id";
$result = mysql_query($query);
$num_options = mysql_num_rows($result);
while ($row = mysql_fetch_assoc($result)){
  $poll_options[] = $row;
}

$smarty->assign("poll_options", $poll_options);

// get poll results
$query = "SELECT name, choice FROM results WHERE poll_id = $poll_id";
$result = mysql_query($query);

$totals = array_pad(array(), $num_options, 0);
while ($row = mysql_fetch_assoc($result)){
  $name = $row['name'];
  
  $value = $row['choice'];
  unset($choice);
  for ($i = 0; $i < $num_options ; $i++){
    if ($choice[$i] = (bool) ($value & (1<<$i)))
      $totals[$i]++;;
  }
  $res['name'] = $name;
  $res['choice'] = $choice;
  $results[] = $res;
}

$smarty->assign('results', $results);
$smarty->assign('totals', $totals);
$smarty->display ("poll.html");

?>
