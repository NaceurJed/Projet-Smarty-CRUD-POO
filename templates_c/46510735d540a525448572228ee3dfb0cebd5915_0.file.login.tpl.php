<?php
/* Smarty version 3.1.39, created on 2021-05-17 07:50:47
  from 'C:\wamp64\www\Formation ICS\15-Template - SMARTY\Ex-2 Projet CRUD SMARTY POO\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a2205766a242_32762942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46510735d540a525448572228ee3dfb0cebd5915' => 
    array (
      0 => 'C:\\wamp64\\www\\Formation ICS\\15-Template - SMARTY\\Ex-2 Projet CRUD SMARTY POO\\template\\login.tpl',
      1 => 1621237844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a2205766a242_32762942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99530237660a22057659673_37630206', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_99530237660a22057659673_37630206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_99530237660a22057659673_37630206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	
	<?php if ($_smarty_tpl->tpl_vars['resultat']->value == "ko") {?>
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
		    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		  </symbol>
		</svg>
		<div class="text-center d-flex alert alert-danger align-items-center" role="alert">
	  		<svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
			<strong> Email ou mot de passe incorrect</strong>
		</div>
	<?php }?>



<div class="row pt-5">

	<form method="post" action="login.php" class="col-8 offset-2 col-md-4 offset-md-4 shadow mb-3 p-3 bg-body rounded">
		<!-- <p class="text-center pb-3">Bienvenue sur mon site</p> -->

		<div class="mb-3 row">
		    <label for="email" class="col-lg-4 d-none d-lg-block form-label">Adresse mail</label>
		    <div class="col-12 col-lg-7">
		    	<?php if (empty($_smarty_tpl->tpl_vars['email']->value)) {?>
		    	<input type="email" name="email" class=" form-control" id="email" placeholder="name@example.com" required="">
		    	<?php } else { ?>
		    	<input type="email" name="email" class=" form-control" id="email" placeholder="name@example.com" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" required>	
		    	<?php }?>
			</div>
		</div>

		<div class="mb-3 row">
		    <label for="inputPassword" class="col-lg-4 d-none d-lg-block col-form-label">Mot de passe</label>
		    <div class="col-12 col-lg-7">
		      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="*********" required="">
		    </div>
		</div>

		
			<div class="mb-3 form-check col-sm-6">
			    <input type="checkbox" name="conect" class="form-check-input" id="exampleCheck1" checked>
			    <label class="form-check-label" for="exampleCheck1">Connexion automatique</label>
			</div>
			<div class="text-center">
				<input type="submit" id="connexion" name="connexion" class="btn btn-primary" value="Connexion">
				<input type="reset" class="btn btn-secondary" value="Annuler"/>
			</div>
		
	</form>

	<div id="Inscrivez-vous" class=" text-center col-8 offset-2 col-md-4 offset-md-4 shadow p-1 bg-body rounded">
		<p>Vous n'avez pas de compte ? <a href="login.php?inscription">Inscrivez-vous</a></p>
	</div>

</div>
<?php
}
}
/* {/block 'body'} */
}
