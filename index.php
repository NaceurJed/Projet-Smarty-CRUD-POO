<?php
require("include/top.php");


$smarty->assign("title", "Naceur Coach", true);
$smarty->assign("login", $login);








$smarty->display('template/accueil.tpl');