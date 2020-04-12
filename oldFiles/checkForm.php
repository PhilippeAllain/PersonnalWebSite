<?php

$name = htmlspecialchars($_POST['name']);
$mail = $_POST['mail'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=personnalwebsite;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO visitors (name,mail, password,date) VALUES(?, ?, ?, Now())');
$req->execute(array($name,$mail,$password));
