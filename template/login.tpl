{extends file="template/layout.tpl"}
{block name=body}

{**************** Les messages d'erreurs ****************}
	
	{if $resultat == "ko"}
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
		    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		  </symbol>
		</svg>
		<div class="text-center d-flex alert alert-danger align-items-center" role="alert">
	  		<svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
			<strong> Email ou mot de passe incorrect</strong>
		</div>
	{/if}



<div class="row pt-5">

	<form method="post" action="login.php" class="col-8 offset-2 col-md-4 offset-md-4 shadow mb-3 p-3 bg-body rounded">
		<!-- <p class="text-center pb-3">Bienvenue sur mon site</p> -->

		<div class="mb-3 row">
		    <label for="email" class="col-lg-4 d-none d-lg-block form-label">Adresse mail</label>
		    <div class="col-12 col-lg-7">
		    	{if empty($email)}
		    	<input type="email" name="email" class=" form-control" id="email" placeholder="name@example.com" required="">
		    	{else}
		    	<input type="email" name="email" class=" form-control" id="email" placeholder="name@example.com" value="{$email}" required>	
		    	{/if}
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
{/block}