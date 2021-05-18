{extends file="template/layout.tpl"}
{block name=body}

{* ***************** carrousel ********************** *}

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

{* *********** ARTICLES *********** *}

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

{* ****************************************************** *}
{/block}

{block name=titre}{$title}{/block}
