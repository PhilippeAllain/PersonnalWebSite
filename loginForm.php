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
<div class="card" id="cardForm">
	<div class="card-header">
	<h1 class="card-text">Connection</h1>
</div>
<form method="post" action="loginCheck.php" name="subcribe" class="well" role="form" id="well">
	<div id="error">
			<p id="subcribe">Vous n'avez pas rempli correctement les champs du formulaire !</p>
	</div>
		<span id="subcribe">Connection.</span>
	<p>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="name">Pseudo</label>
			<div class="col-sm-6">
				<input type="text" class="form-control champ" id="name" name="name" placeholder="Nom/Pseudo" required />
			</div>

		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="password">Mot de passe</label>
			<div class="col-sm-6">
				<input type="password" class="form-control champ" id="password" name="password" placeholder="Mot de passe"/>
			</div>

		<div class="form-group row">
			<div class="col-sm-9 offset-sm-4">
				<button type="submit" class="btn btn-primary" name="signup" value="signup">Validez</button>
				<button type="reset" class="btn btn-primary" value="rafraichir">Rafraîchir</button>
			</div>
		</div>
</div>
	</p>
</form>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="js/loginForm.js"></script>

	</body>
</html>
