<?php
require("include/top.php");

if (isset($_POST['modifier'])) {
	$contact = $_SESSION['connect'];
	if (!empty($_POST['email']) && !empty($_POST['poids'])) {
		//on met tous dans des variables:

		$contact->poids		= $_POST['poids'];
		$contact->email 	= $_POST['email'];
		if (!empty($_POST['sport'])) {
			$contact->sport	= $_POST['sport'];
		}
		$contact->modifier();
		$modif = "ok";
		
	}
}else{
	$contact = $_SESSION['connect'];
	$modif = "ko";
}

/************ Affichage des challenges acceptés **************/
$challenge = challenges::selectChalAcc($contact->id);
$smarty->assign("challenge", $challenge);


/*************************************************************/
$smarty->assign("nom", ucfirst(strtolower($contact->nom)));
$smarty->assign("prenom", ucfirst(strtolower($contact->prenom)));
$smarty->assign("pseudo", ucfirst(strtolower($contact->pseudo)));
$smarty->assign("email", $contact->mail);
$smarty->assign("date_naissance", $contact->date_naissance);
$smarty->assign("poids", $contact->poids);
$smarty->assign("sport", ucfirst(strtolower($contact->sport)));
$smarty->assign("modif", $modif);

$smarty->display('template/monCompte.tpl');
