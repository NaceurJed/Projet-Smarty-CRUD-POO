<?php
/* Smarty version 3.1.39, created on 2021-05-16 14:18:07
  from 'C:\wamp64\www\Formation ICS\15-Template - SMARTY\Ex-2 Projet CRUD SMARTY POO\template\classement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a1299f956d55_43631181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a890c90197570df403d77f7844e8ab4e0b50be7b' => 
    array (
      0 => 'C:\\wamp64\\www\\Formation ICS\\15-Template - SMARTY\\Ex-2 Projet CRUD SMARTY POO\\template\\classement.tpl',
      1 => 1621114826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a1299f956d55_43631181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194011984360a1299f954ba3_39660167', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_194011984360a1299f954ba3_39660167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_194011984360a1299f954ba3_39660167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="indisponible" class="text-center">
	<div class="row">
		<h3 class="col-8 offset-2">Classement indiponible pour le moment</h3>
	</div>
	<div class="row">
		<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="col-8 offset-2 bi bi-emoji-frown" viewBox="0 0 16 16">
	  	<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
	  	<path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
		</svg>
	</div>
</div>

<?php
}
}
/* {/block 'body'} */
}
