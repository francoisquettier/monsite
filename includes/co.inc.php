<?php

	$serveur="";
	$bdd="";
	$mdp="";
	$user="";
	$co= mysql_connect($serveur,$user,$mdp) or die ("erreur".mysql_error());
	$data=mysql_select_db($bdd);

?>