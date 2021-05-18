<?php
/* Smarty version 3.1.39, created on 2021-05-17 12:46:00
  from 'C:\wamp64\www\Formation ICS\15-Template - SMARTY\Ex-2 Projet CRUD SMARTY POO\template\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a26588364682_64007237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bede4428d0aac9d0ed36d748acd7e89c3223a4ff' => 
    array (
      0 => 'C:\\wamp64\\www\\Formation ICS\\15-Template - SMARTY\\Ex-2 Projet CRUD SMARTY POO\\template\\accueil.tpl',
      1 => 1621253430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a26588364682_64007237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16668579260a26588353331_18702881', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202056983260a2658835c182_95779005', 'titre');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_16668579260a26588353331_18702881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16668579260a26588353331_18702881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="container">

  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicateurs -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- Carrousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="template/images/footing.jpg" alt="Carrousel slide 1" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h4>Endurance</h4>
          <p>L'endurance est la capacité de maintenir dans le temps un certain niveau d'intensité exigée</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="template/images/musculation.jpg" alt="Carrousel slide 2" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h4>Musculation</h4>
          <p>La musculation est un ensemble d'exercices physiques visant le développement des muscles squelettiques, afin d'acquérir plus de force et de volume musculaire</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="template/images/fitness.jpg" alt="Carrousel slide 3" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h4>Cardio</h4>
          <p>Le cardio-training, ou entraînement cardiovasculaire, est un entraînement qui joue sur le contrôle de la fréquence cardiaque lors d’un effort à intensité progressive</p>
        </div>
      </div>
    </div>

    <!-- Contrôles -->
    <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Suivant</span>
    </a>
  </div>


  <article class="py-5">
  	<div class="row text-center">
  		<h3 class="col-4 offset-4">Challenges du mois</h3>
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
	
</article>
</div>

<?php
}
}
/* {/block 'body'} */
/* {block 'titre'} */
class Block_202056983260a2658835c182_95779005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_202056983260a2658835c182_95779005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['title']->value;
}
}
/* {/block 'titre'} */
}
