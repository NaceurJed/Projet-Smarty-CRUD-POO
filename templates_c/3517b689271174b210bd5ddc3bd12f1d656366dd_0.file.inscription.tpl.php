<?php
/* Smarty version 3.1.39, created on 2021-05-17 07:26:56
  from 'C:\wamp64\www\Formation ICS\15-Template - SMARTY\Ex-2 Projet CRUD SMARTY POO\template\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a21ac0821986_28212201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3517b689271174b210bd5ddc3bd12f1d656366dd' => 
    array (
      0 => 'C:\\wamp64\\www\\Formation ICS\\15-Template - SMARTY\\Ex-2 Projet CRUD SMARTY POO\\template\\inscription.tpl',
      1 => 1621236285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a21ac0821986_28212201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173709890760a21ac0812df8_35755955', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_173709890760a21ac0812df8_35755955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_173709890760a21ac0812df8_35755955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



		<?php if ($_smarty_tpl->tpl_vars['inscrit']->value == "ok") {?>
	<div class="row">
		<div class="col-12 col-lg-8 offset-lg-2">
			
			<div class="d-flex align-items-center alert alert-success">
				<strong><?php echo $_smarty_tpl->tpl_vars['resultat']->value;?>
</strong>
												<div class="spinner-border text-success ms-auto" role="status" aria-hidden="true"></div>
			</div>
		</div>
	</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['inscrit']->value == "ko") {?>
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
		    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		  </symbol>
		</svg>
		<div class="text-center d-flex alert alert-danger align-items-center" role="alert">
	  		<svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
			<strong><?php echo $_smarty_tpl->tpl_vars['resultat']->value;?>
</strong>
		</div>
	<?php }?>


	<div class="row pt-5">
	<form method="post" action="login.php" class="col-8 offset-2 col-md-4 offset-md-4 shadow mb-3 p-3 bg-body rounded">
		<p class="text-center pb-3">Bienvenue sur mon site, pour mieux en profiter, inscrivez-vous.</p>

		<div class="mb-3 row">
		    <label for="nom" class="col-lg-4 d-none d-lg-block col-form-label">Nom</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required="">
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="prenom" class=" col-lg-4 d-none d-lg-block col-form-label">Prénom</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" required="">
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="pseudo" class=" col-lg-4 d-none d-lg-block col-form-label">Pseudo</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Pseudo" required="">
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="date" class=" col-lg-4 d-none d-lg-block col-form-label">Date de naissance</label>
		    <div class="col-12 col-lg-7">
		    	<input type="date" name="date" class="form-control" id="date" placeholder="Date de naissance" required="">
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="email" class=" col-lg-4 d-none d-lg-block form-label">Adresse mail</label>
		    <div class="col-12 col-lg-7">
		    	<input type="email" name="email" class=" form-control" id="email" placeholder="name@example.com" required="">
			</div>
		</div>

		<div class="mb-3 row">
		    <label for="poids" class=" col-lg-4 d-none d-lg-block form-label">Poids</label>
		    <div class="col-12 col-lg-7">
		    	<input type="number" name="poids" class=" form-control" id="poids" placeholder="Poids" required="">
			</div>
		</div>

		<div class="mb-3 row">
		    <label for="sport" class=" col-lg-4 d-none d-lg-block form-label">Sport pratiqué</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="sport" class=" form-control" id="sport" placeholder="Judo, Boxe, Foot ..." required="">
			</div>
		</div>


		<div class="mb-3 row">
		    <label for="inputPassword" class="col-lg-4 d-none d-lg-block form-label">Mot de passe</label>
		    <div class="col-12 col-lg-7">
				<input type="password" name="password" class="form-control" id="inputPassword" placeholder="*********" required>
		    </div>
		</div>
		    
		
		<div class="mb-3 row">
		    <label for="inputPassword" class="col-lg-4 d-none d-lg-block form-label">Confirmation</label>
		    <div class="col-12 col-lg-7">
		      <input type="password" name="password_confirm" class="form-control" id="inputPassword" placeholder="*********" required="">
		    </div>
		</div>

		<div class="text-center">
			<input type="submit" id="inscription" name="inscription" class="btn btn-primary" value="Inscription">
			<input type="reset" name="reset" class="btn btn-secondary" value="Annuler"/>
		</div>
	</form>
	

	<div class="text-center col-8 offset-2 col-md-4 offset-md-4 pt-2 shadow mb-3 bg-body rounded">
		<p>Déjà inscrit ? <a href="login.php">Connectez-vous</a></p>
	</div>

</div>
<?php
}
}
/* {/block 'body'} */
}
