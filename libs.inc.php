<?php

$fixpath = dirname(__FILE__);

define ("SMARTY_DIR", "smarty/");

require_once(SMARTY_DIR."Smarty.class.php");

$smarty = new Smarty;

$smarty->compile_dir = "$fixpath/compile";
$smarty->template_dir = "$fixpath/html";

?>
