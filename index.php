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

		<div class="container">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuprincipal" aria-controls="menuprincipal" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<a class="navbar-brand"><img src="img/moi_petit.jpg" id="philippe" alt="Philippe"></a>

						<div class="collapse navbar-collapse" id="menuprincipal">
							<ul class="navbar-nav mr-auto">

								<li class="nav-item">
									<a class="nav-link" href="img/CV_2020.pdf">Mon C.V.</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" id="a" href="https://www.linkedin.com/in/philippe-frager-538383108/">Linkedin</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="https://www.facebook.com/">Facebook</a>
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="menuderoulant" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Mes actualités
									</a>
								<div class="dropdown-menu" aria-labelledby="menuderoulant">
									<a class="dropdown-item" href="#">Livres</a>
									<a class="dropdown-item" href="#">Films</a>
									<a class="dropdown-item" href="#">Jeux</a>
								</div>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="php/view/loginForm.php">Login</a>
								</li>
								</ul>
							</div>
					</nav>
				</div>
			</div>
		</div>
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.js"></script>

<form method="post" action="checkForm.php" name="subcribe" class="well" role="form" id="well">
	<span id="subcribe">Formulaire d'inscription.</span>
	<div id="error">
			<p id="subcribe">Vous n'avez pas rempli correctement les champs du formulaire !</p>
	</div>
	<p>

		<div class="form-group">
			<label for="name">Votre nom :</label>
			<input type="text" name="name" id="name"class="form-control champ">
		</div>

		<div class="form-group">
			<label for="firstName">Votre prénom :</label>
			<input type="text" name="firstName" id="firstName" class="form-control champ" />
		</div>

		<div class="form-group">
			<label for="email">Votre adresse email :</label>
			<input type="email" class="form-control champ" id="email" name="mail">
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

<script src="js/form.js"></script>

	</body>
</html>
