<?php
require('includes/co.inc.php');
include ('includes/header.inc.php');
require_once("libs/smarty.class.php");
$smarty = new Smarty();

//include ('fonction.php');
//include ('includes/footer.inc.php');	
//$connect = identification_cookie();
echo '<div class="span8">';
if ($connect == true)
{
		if ( $_GET['id'] )
			{
	
				$id = ($_GET['id']);
	
				// MODIFICATIONS
				$SQL = "SELECT * from articles WHERE articles.id=$id";
				//print_r($SQL);
				$requete = mysql_query($SQL);
				$data = mysql_fetch_array($requete);
				extract($data);	
				$titre=$data['titre'];
				$smarty->assign("titre",$titre);
				$corps=$data['corps'];
				$smarty->assign("corps",$corps);
				$statut=$data['statut'];
				$smarty->assign("statut",$statut);
				$id=$data['id'];
				$smarty->assign("id",$id);
				$smarty->display("mod.tpl");
			}
}
								else {
										echo '<div class="span8">';
										echo "Vous etes pas autorisé a modifier cette page !" ;
									 }

include ('includes/footer.inc.php');
?>

</body>
</html> 
  

