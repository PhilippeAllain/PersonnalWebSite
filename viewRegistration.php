<form method="post" action="registrationCheck.php" name="subcribe" class="well" role="form" id="well">
	<span id="subcribe">Formulaire d'inscription.</span>
	<div id="error">
			<p id="subcribe">Vous n'avez pas rempli correctement les champs du formulaire !</p>
	</div>
	<p>

		<div class="form-group">
			<label for="name">Votre Pseudo :</label>
			<input type="text" name="name" id="name"class="form-control champ">
		</div>

		<div class="form-group">
			<label for="email">Votre adresse email :</label>
			<input type="email" class="form-control champ" id="email" name="email">
		</div>

		<div class="form-group">
			<label for="password">Votre mot de passe :</label>
			<input type="password" class="form-control champ" id="password" name="password">
		</div>

		<div class="form-group">
		<button type="submit" class="btn btn-primary" id="envoi">Envoyer</button>
		<button type="reset" class="btn btn-primary" id="rafraichir">Rafraichir</button>
	</div>
	</p>
</form>
