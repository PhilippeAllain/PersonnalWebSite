<?php

// Suppression des variables de session et de la session
session_destroy();
unset($_SESSION);
$_SESSION[] = array();

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');
