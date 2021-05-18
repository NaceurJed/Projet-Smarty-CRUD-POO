<nav class="px-5 navbar navbar-dark bg-dark fixed-top navbar-expand-md"> <!-- navbar-expand-sm: tu devient burger en dessous de sm -->
    <img src="template/images/ncc.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent"> <!-- justify-content-end pour mettre le menu tout au bout à droite-->
        <ul class="navbar-nav mr-auto">
          	<li class="nav-item active">
            	<a class="nav-link" href="index.php">ACCUEIL</a>
          	</li>
          	<li class="nav-item">
            	<a class="nav-link" href="classement.php">CLASSEMENT</a>
          	</li>
          	<li class="nav-item">
            	<a class="nav-link" href="entrainement.php">ENTRAINEMENT</a>
          	</li>
          	<li class="nav-item">
            	<a class="nav-link" href="challenges.php">CHALLENGES</a>
          	</li>
          	<li class="nav-item">
            	{if !$login}
	      			<a class="nav-link" href="login.php">LOGIN</a>
	      		{else}
	      			<a class="nav-link" href="monCompte.php">MON COMPTE</a>
	      		{/if}
          	</li>
          	{if $login}
	      		<li class="nav-item">
	      		<a class="nav-link" href="deconnexion.php">DECONNEXION</a>
	      		</li>
	      	{/if}
        </ul>
     </div>
</nav>