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
			<label for="name">Votre Pseudo :</label>
			<input type="text" name="name" id="name"class="form-control champ" minlength="3" required>
		</div>

		<div class="form-group">
			<label for="password">Votre mot de passe :</label>
			<input type="password" class="form-control champ" id="password" name="password" minlength="3" required>
		</div>

		<div class="form-group">
		<input type="submit" id="envoi" value="Envoyer" />
		<input type="reset" id="rafraichir" value="Rafraîchir" />
	</div>

	</p>
</form>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

<script src="js/loginForm.js"></script>

	</body>
</html>
