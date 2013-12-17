<?php
require('includes/co.inc.php');
require_once("libs/smarty.class.php");
$smarty = new Smarty();
include('includes/header.inc.php');
echo '<div class="span8">';
$smarty->display("formulaire.tpl");
include ('includes/footer.inc.php');
?>
  

