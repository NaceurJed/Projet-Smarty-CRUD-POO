<?php
require("include/top.php");
$smarty->assign("login", $login);


if ($login) {
	$contact = $_SESSION['connect'];
	if (isset($_GET['id'])) {
		switch ($_GET['id']) {

			case '1':
				challenges::chalAccepte($_GET['id'], $contact->id);
				header("Location: monCompte.php");
				break;

			case '2':
				challenges::chalAccepte($_GET['id'], $contact->id);
				header("Location: monCompte.php");
				break;

			case '3':
				challenges::chalAccepte($_GET['id'], $contact->id);
				header("Location: monCompte.php");
				break;
			
			default:
				# code...
				break;

		}
	}
	$smarty->display('template/challenges.tpl');
} else {
	$smarty->display('template/challenges.tpl');
}

