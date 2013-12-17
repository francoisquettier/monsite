{foreach from=$data_tab item=data}
<h3><EM>Titre : {$data['titre']}</EM><h3>
<p style = "text-align : justify;">
<h4><p>Le : {$data['date_fr']} </p><h4>
<p>Contenu : {$data['corps']}</p>
<p><img src="img/{$data['id']}.jpg" alt="image"/>
{if $identification == true}
<div align="right"><a href="mod.php?id={$data['id']}"><font size="3"><font face="Calibri">Modifier Article</font></font></a>
&nbsp; &nbsp;
<a href="com.php?id={$data['id']}"><font size="3"><font face="Calibri">Commenter article</font></font></a><br />
<a href="delete.php?id={$data['id']}"><font size="3"><font face="Calibri">Supprimer article</font></font></a><br /></div>

{/if}
<hr> 

{*{$data['corps']|truncate:500}<br/><a href="monsite - smarty/index.php?id=($data['id']}" title="More ma suite !"> Lire la suite</a></p>*}

{/foreach}
