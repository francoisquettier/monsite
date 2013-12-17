<?php /* Smarty version Smarty-3.1.15, created on 2013-12-03 17:48:30
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14487529de11c1ca465-06581937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1386089307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14487529de11c1ca465-06581937',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529de11c262a01_96648076',
  'variables' => 
  array (
    'data_tab' => 0,
    'data' => 0,
    'identification' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529de11c262a01_96648076')) {function content_529de11c262a01_96648076($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_tab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
<h3><EM>Titre : <?php echo $_smarty_tpl->tpl_vars['data']->value['titre'];?>
</EM><h3>
<p style = "text-align : justify;">
<h4><p>Le : <?php echo $_smarty_tpl->tpl_vars['data']->value['date_fr'];?>
 </p><h4>
<p>Contenu : <?php echo $_smarty_tpl->tpl_vars['data']->value['corps'];?>
</p>
<p><img src="img/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
.jpg" alt="image"/>
<?php if ($_smarty_tpl->tpl_vars['identification']->value==true) {?>
<div align="right"><a href="mod.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><font size="3"><font face="Calibri">Modifier Article</font></font></a>
&nbsp; &nbsp;
<a href="com.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><font size="3"><font face="Calibri">Commenter article</font></font></a><br />
<a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><font size="3"><font face="Calibri">Supprimer article</font></font></a><br /></div>

<?php }?>
<hr> 



<?php } ?>
<?php }} ?>
