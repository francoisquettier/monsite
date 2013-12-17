<?php
require("libs/smarty.class.php");

$smarty = new Smarty();
$texte = "<p>bonjour</p>";
$smarty->assign("texte",$texte);
$smarty->display("smarty.html");

?>