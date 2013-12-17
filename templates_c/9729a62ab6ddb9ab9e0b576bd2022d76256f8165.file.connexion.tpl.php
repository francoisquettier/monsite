<?php /* Smarty version Smarty-3.1.15, created on 2013-11-26 15:06:05
         compiled from ".\templates\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:236905294aacd286638-10970848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9729a62ab6ddb9ab9e0b576bd2022d76256f8165' => 
    array (
      0 => '.\\templates\\connexion.tpl',
      1 => 1385474688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236905294aacd286638-10970848',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5294aacd2ccb41_20805731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5294aacd2ccb41_20805731')) {function content_5294aacd2ccb41_20805731($_smarty_tpl) {?><html>
<body>
						<form method="POST" action="co_traitement.php"enctype="multipart/form-data">
							<fieldset style="width:430px;">
								<legend><span style="text-decoration:underline;">Connexion </span></legend>
				
								<label for="text">Adresse Email :</label><br />
								<input type="text" name="email"  /><br />
				
								<label for="text"> Mot de passe :</label><br />
								<input type="password" name="mdp"  /><br />
							
							</fieldset>
							<center><input type="submit" value="Valider" name="poster"/>
					<input type="submit" value="Annuler" /></center></font>
					<br>
					</form>
</body>
</html> 
<?php }} ?>
