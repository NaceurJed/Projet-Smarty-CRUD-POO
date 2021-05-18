<?php
/* Smarty version 3.1.39, created on 2021-05-18 06:59:47
  from 'C:\wamp64\www\Formation ICS\15-Template - SMARTY\Ex-2 Projet CRUD SMARTY POO\template\monCompte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a365e3bd9bf0_46431801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4262d985192cd37231e06455b76429dfe3c73d78' => 
    array (
      0 => 'C:\\wamp64\\www\\Formation ICS\\15-Template - SMARTY\\Ex-2 Projet CRUD SMARTY POO\\template\\monCompte.tpl',
      1 => 1621321173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a365e3bd9bf0_46431801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17040579160a365e3bb1769_69093555', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_17040579160a365e3bb1769_69093555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17040579160a365e3bb1769_69093555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div class="row pt-5">

	<form method="post" action="monCompte.php" class="col-8 col-md-4 mb-3 p-3 bg-body rounded">
		<?php if ($_smarty_tpl->tpl_vars['modif']->value == 'ok') {?>
			<div class="alert alert-primary" role="alert">
			  Modification prise en compte
			</div>
		<?php }?>
		<legend class="h3">Mes infos</legend>
		<div class="mb-3 row">
		    <label for="nom" class="col-lg-4 d-none d-lg-block col-form-label">Mon nom</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="nom" class="form-control" id="nom" value="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
" disabled >
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="prenom" class=" col-lg-4 d-none d-lg-block col-form-label">Prénom</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
" disabled>
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="pseudo" class=" col-lg-4 d-none d-lg-block col-form-label">Pseudo</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="pseudo" class="form-control" id="pseudo" value="<?php echo $_smarty_tpl->tpl_vars['pseudo']->value;?>
" disabled>
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="date" class=" col-lg-4 d-none d-lg-block col-form-label">Date de naissance</label>
		    <div class="col-12 col-lg-7">
		    	<input type="date" name="date" class="form-control" id="date" value="<?php echo $_smarty_tpl->tpl_vars['date_naissance']->value;?>
" disabled>
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="email" class=" col-lg-4 d-none d-lg-block form-label">Adresse mail</label>
		    <div class="col-12 col-lg-7">
		    	<input type="email" name="email" class=" form-control" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
			</div>
		</div>

		<div class="mb-3 row">
		    <label for="poids" class=" col-lg-4 d-none d-lg-block form-label">Poids</label>
		    <div class="col-12 col-lg-7">
		    	<input type="number" name="poids" class=" form-control" id="poids" value="<?php echo $_smarty_tpl->tpl_vars['poids']->value;?>
">
			</div>
		</div>

		<div class="mb-3 row">
		    <label for="sport" class=" col-lg-4 d-none d-lg-block form-label">Sport pratiqué</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="sport" class=" form-control" id="sport" value="<?php echo $_smarty_tpl->tpl_vars['sport']->value;?>
">
			</div>
		</div>

		<div class="text-center">
			<input type="submit" id="modifier" name="modifier" class="btn btn-primary" value="Modifier">
		</div>
	</form>

</div>

<div>
	<h3>Mes challenges</h3>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challenge']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
	<div class="card col-md-4 text-center" style="width: 18rem;">
	  <img id="defis" src="template/images/<?php echo $_smarty_tpl->tpl_vars['value']->value['image'];?>
" class="card-img-top" alt="pompes">
	  <div class="card-body">
	    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['nom'];?>
</h5>
	    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</p>
	    <p class="card-text">Date: <?php echo $_smarty_tpl->tpl_vars['value']->value['date_chal'];?>
</p>
	    <p class="card-text" hidden=""><?php echo $_smarty_tpl->tpl_vars['value']->value['id_user'];?>
</p>
	    <p class="card-text" hidden=""><?php echo $_smarty_tpl->tpl_vars['value']->value['id_challenge'];?>
</p>
	    <a href="challenges.php?id_user=<?php echo $_smarty_tpl->tpl_vars['value']->value['id_user'];?>
&id_challenge=<?php echo $_smarty_tpl->tpl_vars['value']->value['id_challenge'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['value']->value['date_chal'];?>
" class="btn btn-primary">Supprimer</a>
	  </div>
	</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php
}
}
/* {/block 'body'} */
}
