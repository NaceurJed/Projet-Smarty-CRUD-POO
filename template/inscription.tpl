{extends file="template/layout.tpl"}
{block name=body}


	{**************** Les messages d'erreurs ****************}
	{if $inscrit == "ok"}
	<div class="row">
		<div class="col-12 col-lg-8 offset-lg-2">
			
			<div class="d-flex align-items-center alert alert-success">
				<strong>{$resultat}</strong>
				{* {$newUsers|@var_dump} *}
				{* {$sql|@var_dump} *}
				<div class="spinner-border text-success ms-auto" role="status" aria-hidden="true"></div>
			</div>
		</div>
	</div>
	{elseif $inscrit == "ko"}
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
		    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		  </symbol>
		</svg>
		<div class="text-center d-flex alert alert-danger align-items-center" role="alert">
	  		<svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
			<strong>{$resultat}</strong>
		</div>
	{/if}


	{********************************************************}
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
		    	<input type="text" name="sport" class=" form-control" id="sport" placeholder="Judo, Boxe, Foot ...">
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
{/block}