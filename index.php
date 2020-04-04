<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet" />

		<title>Formulaire d'inscription</title>
	</head>

	<body>

<?php include ("menuNav.php"); ?>

<form method="post" action="php/model/checkForm.php" name="subcribe" class="well" role="form" id="well">
	<span id="subcribe">Formulaire d'inscription.</span>
	<div id="error">
			<p id="subcribe">Vous n'avez pas rempli correctement les champs du formulaire !</p>
	</div>
	<p>

		<div class="form-group">
			<label for="name">Votre nom :</label>
			<input type="text" name="name" id="name"class="form-control champ">
			<span id="name"></span>
		</div>

		<div class="form-group">
			<label for="firstName">Votre prénom :</label>
			<input type="text" name="firstName" id="firstName" class="form-control champ" />
		</div>

		<div class="form-group">
			<label for="lemail">Votre adresse email :</label>
			<input type="email" class="form-control champ" id="lemail" name="email">
		</div>

		<div class="form-group">
			<label for="password">Votre mot de passe :</label>
			<input type="password" class="form-control champ" id="password" name="password">
		</div>

		<div class="form-group">
		<input type="submit" id="envoi" value="Envoyer" />
		<input type="reset" id="rafraichir" value="Rafraîchir" />
	</div>
	</p>
</form>


<?php include("script.php"); ?>


	</body>
</html>
