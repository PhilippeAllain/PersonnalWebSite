<?php
require('viewNavBar.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/css/bootstrap.css" rel="stylesheet">

		<title>Connection</title>
	</head>

	<body>

<form method="post" action="loginCheck.php" name="subcribe" class="well" role="form" id="well">
	<div id="error">
			<p id="subcribe">Vous n'avez pas rempli correctement les champs du formulaire !</p>
	</div>
		<span id="subcribe">Connection.</span>
	<p>
		<div class="form-group">
			<label for="name">Votre pseudo :</label>
			<input type="text" name="name" id="name" class="form-control champ">
		</div>

		<div class="form-group">
			<label for="password">Votre mot de passe :</label>
			<input type="password" class="form-control champ" id="password" name="password">
		</div>

		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="remember">
			<label class="form-check-label" for="remember">Se souvenir de moi</label>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary" id="envoi">Envoyer</button>
			<button type="reset" class="btn btn-primary" id="rafraichir">Rafraichir</button>
		</div>

	</p>
</form>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

<script src="js/loginForm.js"></script>

	</body>
</html>
