<?php
//Pour la deconnexion on va devoir detruire les SESSIONs
//Mais avant il faut les initialiser
session_start(); //initialise la session
session_unset(); //desactive la session
session_destroy(); // detruire la session (pour être sûr)

header('location: index.php'); // et on redirige l'utilisateur vers l'accueil non connecté