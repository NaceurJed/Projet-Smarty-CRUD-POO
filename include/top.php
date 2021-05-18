<?php 
require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();

require_once 'include/Autoloader.php';
Autoloader::register();

session_start();
//Initialisation d'une classe Smarty
$smarty = new Smarty;
if (isset($_SESSION['connect'])) {
	$login = true;
} else {
	$login = false;
	$inscrit = "";
	$resultat = "";
}
$smarty->assign("login", $login);


