<?php
include ('includes/co.inc.php');
include ('includes/header.inc.php');
echo '<div class="span8">';
unset($_COOKIE['sid']);
setcookie ('sid',NULL,-1);

echo "Vous etes déconnecté vous allez etre redirigé vers la page index !";
header ('Refresh: 3;url=index.php');

include ('includes/footer.inc.php');


?>