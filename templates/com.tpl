<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<body>
						<form method="POST" action="com.php"enctype="multipart/form-data" onsubmit="return verifier();">
							<fieldset style="width:430px;">
								<legend><span style="text-decoration:underline;">Ajouter un article </span></legend>
								
								<label for="text">Auteur :</label><br />
								<input type="text" name="auteur"  /><br />
				
								<label for="text">Sujet :</label><br />
								<input type="text" name="sujet"  /><br />
				
								<label for="text"> Commentaire :</label><br />
								<input type="text" name="commentaire"  /><br />

							</fieldset>
							<center><input type="submit" value="Valider" name="poster"/>
					<input type="submit" value="Annuler" /></center></font>
					<br>
					</form>
</body>
</html> 