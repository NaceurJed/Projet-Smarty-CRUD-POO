<?php
require("include/top.php");

$smarty->assign("login", $login);
$smarty->assign("inscrit", $inscrit);
$smarty->assign("resultat", $resultat);
$resultat = "";


/***************************** Traitement de la connexion***********************************/
if (isset($_POST['connexion'])) {
	if (!empty($_POST['email']) && !empty($_POST['password'])) {
		//on met tous dans des variables:
		$email 				= $_POST['email'];
		$password 			= $_POST['password'];
	}
	//On vérifie le mail et le mot de passe
		$resultat = user::authentification($email, $password);
	if (empty($resultat)) {
			$resultat = 'ko';
			$smarty->assign("resultat", $resultat);
			$smarty->display('template/login.tpl');
		} else {
			$login = true;
			// $smarty->assign("login", $login);
			
				$_SESSION['connect'] = $resultat;
			
			header("Location: index.php");
			exit();
		}
}
/************************************************************************************************/

/********************* Traitement de l'inscription *************************/
if (isset($_POST['inscription'])) {
	if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['date']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm']) && !empty($_POST['poids'])) {
		//on met tous dans des variables:

		$nom 				= $_POST['nom'];
		$prenom 			= $_POST['prenom'];
		$date_naissance		= $_POST['date'];
		$poids				= $_POST['poids'];
		$pseudo 			= $_POST['pseudo'];
		$email 				= $_POST['email'];
		$password 			= $_POST['password'];
		$password_confirm 	= $_POST['password_confirm'];
		if (!empty($_POST['sport'])) {
			$sport			= $_POST['sport'];
		}


		$newUsers = user::build($nom, $prenom, $pseudo, $email, $date_naissance, $password, $poids, $sport);
		
		if ($newUsers->creer()) {
			$inscrit = "ok";
			$resultat = "Création réussie";
			setcookie('email', $email, time() + 365*24*3600, null, null, false, true);
			header("Refresh:2; url=login.php");
		}else{
			$inscrit = "ko";
			$resultat = "Création echouée";
		}
		

		// $new = $newUsers->creer();
		// $smarty->assign("newUsers", $newUsers);
		$smarty->assign("resultat", $resultat);
		$smarty->assign("email", $email);
		$smarty->assign("inscrit", $inscrit);
		$smarty->display('template/inscription.tpl');
	}
/**************************************************************************************/	
}elseif (isset($_GET['inscription'])) {
	$smarty->display('template/inscription.tpl');
}else {
	if (!empty($_COOKIE['email'])){
		$smarty->assign("email", $_COOKIE['email']);
	}
	$smarty->display('template/login.tpl');
}
