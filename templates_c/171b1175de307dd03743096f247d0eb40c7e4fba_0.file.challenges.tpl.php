<?php
/* Smarty version 3.1.39, created on 2021-05-17 13:49:34
  from 'C:\wamp64\www\Formation ICS\15-Template - SMARTY\Ex-2 Projet CRUD SMARTY POO\template\challenges.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a2746e8e1c14_17891571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '171b1175de307dd03743096f247d0eb40c7e4fba' => 
    array (
      0 => 'C:\\wamp64\\www\\Formation ICS\\15-Template - SMARTY\\Ex-2 Projet CRUD SMARTY POO\\template\\challenges.tpl',
      1 => 1621259373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a2746e8e1c14_17891571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133035056560a2746e8d8f39_63542193', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_133035056560a2746e8d8f39_63542193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_133035056560a2746e8d8f39_63542193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if (!$_smarty_tpl->tpl_vars['login']->value) {?>
<div id="indisponible" class="text-center">
	<div class="row">
		<h3 class="col-8 offset-2">Veuillez vous connecter d'abord pour accepter les challenges</h3>
	</div>
	<div class="row">
		<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="col-8 offset-2 bi bi-emoji-frown" viewBox="0 0 16 16">
	  	<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
	  	<path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
		</svg>
	</div>
</div>
<?php }?>

<article class="py-4 row text-center">
	<div class="col-10 offset-1">
  	<div class="row text-center">
  		<h3 class="col-4 offset-4 p-3">Tous les challenges disponibles</h3>
  	</div>
  	
  	<div class="row">
	<div class="card col-md-4" style="width: 18rem;">
	  <img id="defis" src="template/images/pompe.jpg" class="card-img-top" alt="pompes">
	  <div class="card-body">
	    <h5 class="card-title">Pompes</h5>
	    <p class="card-text">Faire le maximum de pompes en 30 minutes</p>
	    <a href="challenges.php?id=1" class="btn btn-primary">Accepter</a>
	  </div>
	</div>

	<div class="card col-md-4" style="width: 18rem;">
	  <img id="defis" src="template/images/traction.jpg" class="card-img-top" alt="pompes">
	  <div class="card-body">
	    <h5 class="card-title">Tractions</h5>
	    <p class="card-text">Faire le maximum de tractions en 30 minutes</p>
	    <a href="challenges.php?id=3" class="btn btn-primary">Accepter</a>
	  </div>
	</div>

	<div class="card col-md-4" style="width: 18rem;">
	  <img id="defis" src="template/images/abdo.jpg" class="card-img-top" alt="pompes">
	  <div class="card-body">
	    <h5 class="card-title">Abdo</h5>
	    <p class="card-text">Faire le maximum d'abdo en 30 minutes</p>
	    <a href="challenges.php?id=2" class="btn btn-primary">Accepter</a>
	  </div>
	</div>
	</div>
	</div>
	
</article>

<?php
}
}
/* {/block 'body'} */
}
