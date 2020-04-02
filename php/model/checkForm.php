<?php

$name = htmlspecialchars($_POST['name']);
$firstName = htmlspecialchars($_POST['firstName']);
$mail = $_POST['mail'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO visitors (name, firstName, mail, password, date) VALUES(?, ?, ?, ?, NOW())');
$req->execute(array($name, $firstName,$mail,$password));
