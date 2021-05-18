<?php
/* Smarty version 3.1.39, created on 2021-05-17 09:38:31
  from 'C:\wamp64\www\Formation ICS\15-Template - SMARTY\Ex-2 Projet CRUD SMARTY POO\template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a239975d7b88_50605278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806f5c60aa31a7ce194cc77db384f406f2028514' => 
    array (
      0 => 'C:\\wamp64\\www\\Formation ICS\\15-Template - SMARTY\\Ex-2 Projet CRUD SMARTY POO\\template\\header.tpl',
      1 => 1621244013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a239975d7b88_50605278 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="px-5 navbar navbar-dark bg-dark fixed-top navbar-expand-md"> <!-- navbar-expand-sm: tu devient burger en dessous de sm -->
    <img src="template/images/ncc.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent"> <!-- justify-content-end pour mettre le menu tout au bout à droite-->
        <ul class="navbar-nav mr-auto">
          	<li class="nav-item active">
            	<a class="nav-link" href="index.php">ACCUEIL</a>
          	</li>
          	<li class="nav-item">
            	<a class="nav-link" href="classement.php">CLASSEMENT</a>
          	</li>
          	<li class="nav-item">
            	<a class="nav-link" href="entrainement.php">ENTRAINEMENT</a>
          	</li>
          	<li class="nav-item">
            	<a class="nav-link" href="challenges.php">CHALLENGES</a>
          	</li>
          	<li class="nav-item">
            	<?php if (!$_smarty_tpl->tpl_vars['login']->value) {?>
	      			<a class="nav-link" href="login.php">LOGIN</a>
	      		<?php } else { ?>
	      			<a class="nav-link" href="monCompte.php">MON COMPTE</a>
	      		<?php }?>
          	</li>
          	<?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
	      		<li class="nav-item">
	      		<a class="nav-link" href="deconnexion.php">DECONNEXION</a>
	      		</li>
	      	<?php }?>
        </ul>
     </div>
</nav><?php }
}
