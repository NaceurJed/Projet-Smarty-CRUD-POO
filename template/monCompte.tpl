{extends file="template/layout.tpl"}
{block name=body}



<div class="row pt-5">

	<form method="post" action="monCompte.php" class="col-8 col-md-4 mb-3 p-3 bg-body rounded">
		{if $modif == 'ok'}
			<div class="alert alert-primary" role="alert">
			  Modification prise en compte
			</div>
		{/if}
		<legend class="h3">Mes infos</legend>
		<div class="mb-3 row">
		    <label for="nom" class="col-lg-4 d-none d-lg-block col-form-label">Mon nom</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="nom" class="form-control" id="nom" value="{$nom}" disabled >
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="prenom" class=" col-lg-4 d-none d-lg-block col-form-label">Prénom</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="prenom" class="form-control" id="prenom" value="{$prenom}" disabled>
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="pseudo" class=" col-lg-4 d-none d-lg-block col-form-label">Pseudo</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="pseudo" class="form-control" id="pseudo" value="{$pseudo}" disabled>
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="date" class=" col-lg-4 d-none d-lg-block col-form-label">Date de naissance</label>
		    <div class="col-12 col-lg-7">
		    	<input type="date" name="date" class="form-control" id="date" value="{$date_naissance}" disabled>
		    </div>
		</div>

		<div class="mb-3 row">
		    <label for="email" class=" col-lg-4 d-none d-lg-block form-label">Adresse mail</label>
		    <div class="col-12 col-lg-7">
		    	<input type="email" name="email" class=" form-control" id="email" value="{$email}">
			</div>
		</div>

		<div class="mb-3 row">
		    <label for="poids" class=" col-lg-4 d-none d-lg-block form-label">Poids</label>
		    <div class="col-12 col-lg-7">
		    	<input type="number" name="poids" class=" form-control" id="poids" value="{$poids}">
			</div>
		</div>

		<div class="mb-3 row">
		    <label for="sport" class=" col-lg-4 d-none d-lg-block form-label">Sport pratiqué</label>
		    <div class="col-12 col-lg-7">
		    	<input type="text" name="sport" class=" form-control" id="sport" value="{$sport}">
			</div>
		</div>

		<div class="text-center">
			<input type="submit" id="modifier" name="modifier" class="btn btn-primary" value="Modifier">
		</div>
	</form>

</div>

<div>
	<h3>Mes challenges</h3>

	{foreach $challenge as $value}
	<div class="card col-md-4 text-center" style="width: 18rem;">
	  <img id="defis" src="template/images/{$value['image']}" class="card-img-top" alt="pompes">
	  <div class="card-body">
	    <h5 class="card-title">{$value['nom']}</h5>
	    <p class="card-text">{$value['description']}</p>
	    <p class="card-text">Date: {$value['date_chal']}</p>
	    <p class="card-text" hidden="">{$value['id_user']}</p>
	    <p class="card-text" hidden="">{$value['id_challenge']}</p>
	    <a href="challenges.php?id_user={$value['id_user']}&id_challenge={$value['id_challenge']}&date={$value['date_chal']}" class="btn btn-primary">Supprimer</a>
	  </div>
	</div>
	{/foreach}
	{* {$challenge|@var_dump} *}
</div>
{/block}