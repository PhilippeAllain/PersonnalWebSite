
<div class="card" id="cardForm">
	<div class="card-header">
		<h1 class="card-text">Formulaire d'inscription</h1>
	</div>
	<div class="card-body">
		<form id="signupForm" method="post" class="form-horizontal" role="form" action="registrationCheck.php">
			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="firstname">Votre Prénom</label>
				<div class="col-sm-6">
					<input type="text" class="form-control champ" id="firstname" name="firstname" placeholder="Prénom" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="lastname">Votre Nom</label>
				<div class="col-sm-6">
					<input type="text" class="form-control champ" id="lastname" name="lastname" placeholder="Nom" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="username">Votre Pseudo</label>
				<div class="col-sm-6">
					<input type="text" class="form-control champ" id="username" name="username" placeholder="Pseudo" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="email">Votre Email</label>
				<div class="col-sm-6">
					<input type="text" class="form-control champ" id="email" name="email" placeholder="Email" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="password">Mot de passe</label>
				<div class="col-sm-6">
					<input type="password" class="form-control champ" id="password" name="password" placeholder="Mot de passe" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="confirm_password">Confirmer Mot de passe</label>
				<div class="col-sm-6">
					<input type="password" class="form-control champ" id="confirm_password" name="confirm_password" placeholder="Confirmer Mot de passe" />
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-6 offset-sm-4">
					<div class="form-check">
						<input type="checkbox" id="agree" name="agree" value="agree" class="form-check-input"/>
						<label class="form-check-label">Accepter les conditions générales</label>
					</div>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-9 offset-sm-4">
					<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Validez</button>
					<button type="reset" class="btn btn-primary" value="rafraichir">Rafraîchir</button>
				</div>
			</div>
		</form>
	</div>
</div>
